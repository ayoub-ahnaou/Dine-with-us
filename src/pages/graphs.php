<div id="graphs" class="w-4/5 flex flex-col max-md:w-full">
    <div class="flex p-6">
        <p class="text-xl">Data Visualisation</p>
    </div>

    <div class="w-full h-full bg-white">

        <div class="bg-gray-100 p-2">
            <div class="grid grid-cols-3 gap-3">
                <dl class="bg-white rounded-lg flex flex-col items-center justify-center h-[100px]">
                    <dt class="w-8 h-8 rounded-full bg-orange-100 text-gray-600 text-sm font-medium flex items-center justify-center mb-1">12</dt>
                    <dd class="text-gray-600 text-sm font-medium">Users</dd>
                </dl>
                <dl class="bg-white rounded-lg flex flex-col items-center justify-center h-[100px]">
                    <dt class="w-8 h-8 rounded-full bg-teal-100 text-gray-600 text-sm font-medium flex items-center justify-center mb-1">23</dt>
                    <dd class="text-gray-600 text-sm font-medium">Menus</dd>
                </dl>
                <dl class="bg-white rounded-lg flex flex-col items-center justify-center h-[100px]">
                    <dt class="w-8 h-8 rounded-full bg-blue-100 text-gray-600 text-sm font-medium flex items-center justify-center mb-1">64</dt>
                    <dd class="text-gray-600 text-sm font-medium">Reservations</dd>
                </dl>
            </div>
        </div> 

        <!-- Line Chart -->
        <div class="py-6" id="pie-chart"></div>
    </div>
</div>

<script>
    const getChartOptions = () => {
        return {
            series: [10, 10, 80],
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
            labels: ["Reservation effectue", "Reservations canceled", "Reservations pendeed"],
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
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