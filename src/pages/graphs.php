<div id="graphs" class="w-4/5 flex flex-col max-md:w-full">
    <div class="flex p-6">
        <p class="text-xl">Data Visualisation</p>
    </div>

    <div class="w-full h-full bg-white">

        <div class="bg-gray-100 p-2">
            <div class="grid grid-cols-3 gap-3">
                <dl class="bg-white rounded-lg flex flex-col items-center justify-center h-[100px]">
                    <dt class="w-8 h-8 rounded-full bg-orange-100 text-gray-600 text-sm font-medium flex items-center justify-center mb-1">
                        <?php
                        $stats = $connect->prepare("SELECT count(user_id) FROM user");
                        $stats->bind_result($count_users);
                        $stats->execute();
                        $stats->fetch();
                        echo $count_users;
                        $stats->close();
                        ?>
                    </dt>
                    <dd class="text-gray-600 text-sm font-medium">Users</dd>
                </dl>
                <dl class="bg-white rounded-lg flex flex-col items-center justify-center h-[100px]">
                    <dt class="w-8 h-8 rounded-full bg-teal-100 text-gray-600 text-sm font-medium flex items-center justify-center mb-1">
                    <?php
                        $stats = $connect->prepare("SELECT count(menu_id) FROM menu");
                        $stats->bind_result($count_menus);
                        $stats->execute();
                        $stats->fetch();
                        echo $count_menus;
                        $stats->close();
                        ?>
                    </dt>
                    <dd class="text-gray-600 text-sm font-medium">Menus</dd>
                </dl>
                <dl class="bg-white rounded-lg flex flex-col items-center justify-center h-[100px]">
                    <dt class="w-8 h-8 rounded-full bg-blue-100 text-gray-600 text-sm font-medium flex items-center justify-center mb-1">
                    <?php
                        $stats = $connect->prepare("SELECT count(reservation_id) FROM reservation");
                        $stats->bind_result($count_reservation);
                        $stats->execute();
                        $stats->fetch();
                        echo $count_reservation;
                        $stats->close();
                        ?>
                    </dt>
                    <dd class="text-gray-600 text-sm font-medium">Reservations</dd>
                </dl>
            </div>
        </div> 

        <?php 
        $reservation_pended = $connect->prepare("SELECT count(reservation_id) from reservation WHERE status LIKE 'Pendding'");
        $reservation_cancelled = $connect->prepare("SELECT count(reservation_id) from reservation WHERE status LIKE 'Canceled'");
        $reservation_approved = $connect->prepare("SELECT count(reservation_id) from reservation WHERE status LIKE 'Approved'");

        $reservation_pended->execute();
        $reservation_pended->bind_result($reservation_pended_result);
        $reservation_pended_result = $reservation_pended->get_result()->fetch_row()[0];
        $reservation_pended->close();

        // var_dump($reservation_pended_result);
        $reservation_cancelled->execute();
        $reservation_cancelled->bind_result($reservation_cancelled_result);
        $reservation_cancelled_result = $reservation_cancelled->get_result()->fetch_row()[0];
        $reservation_cancelled->close();

        $reservation_approved->execute();
        $reservation_approved->bind_result($reservation_approved_result);
        $reservation_approved_result = $reservation_approved->get_result()->fetch_row()[0];
        $reservation_approved->close();


        ?>
        <!-- Line Chart -->
        <div class="py-6" id="pie-chart"></div>
    </div>
</div>

<script>
    const getChartOptions = () => {
        return {
            series: [<?= $reservation_approved_result ?>, <?= $reservation_cancelled_result?>, <?= $reservation_pended_result?>],
            colors: ["#22c55e", "#fca5a5", "#fef08a"],
            chart: {
                height: 320,
                width: "100%",
                type: "pie",
            },
            stroke: {
                colors: ["white"],
                lineCap: "",
            },
            plotOptions: {
                pie: {
                    labels: {
                        show: true,
                    },
                    size: "100%",
                    dataLabels: {
                        offset: -25
                    }
                },
            },
            labels: ["Reservation approved", "Reservations canceled", "Reservations pended"],
            dataLabels: {
                enabled: true,
            },
            legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return value + "%"
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function(value) {
                        return value + "%"
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        }
    }

    if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
        chart.render();
    }
</script>