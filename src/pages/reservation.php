<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le CHEF - Menu</title>
    <link rel="stylesheet" href="../assets/css/input.css?v=2">
    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-[Oswald]">
    <div class="min-h-[100vh] flex flex-col">
        <?php include "../assets/components/navigation.php"; ?>
        <?php
        if (!isset($_SESSION["username"])) {
            header("location: ./login.php");
        }
        ?>

        <?php
        $user_id = $_SESSION["user_id"];

        $total_reservations_stm = $connect->prepare("SELECT count(reservation_id) from reservation where user_id = ?");
        $total_reservations_stm->bind_param("i", $user_id);
        $total_reservations_stm->bind_result($total_reservations);
        $total_reservations_stm->execute();
        ?>

        <div class="flex-grow flex flex-col gap-4 py-6 px-20 max-md:px-6 max-sm:px-2">
            <div class="">
                <?php
                while($total_reservations_stm->fetch()){
                    echo "<p class='text-2xl'>Reservations <span class='text-lg text-gray-500'>($total_reservations)</span></p>";
                }
                $total_reservations_stm->close();
                ?>
            </div>

            <?php 
            $user_reservations_stm = $connect->prepare("SELECT reservation.reservation_id, menu_picture, menu_title, menu_description, reservation_date, status 
            from user, menu, reservation, reservation_menu
            where reservation_menu.menu_id = menu.menu_id 
            and reservation.reservation_id = reservation_menu.reservation_id 
            and user.user_id = ?");
            $user_reservations_stm->bind_param("i", $user_id);
            $user_reservations_stm->bind_result($reservation_id, $menu_picture, $menu_title, $menu_description, $reservation_date, $status);
            $user_reservations_stm->execute();
            ?>
            <div class="h-[70vh] overflow-auto noscroll-bar">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3">
                                Menu details
                            </th>
                            <th class="px-6 py-3">
                                Date reservation
                            </th>
                            <th class="px-6 py-3">
                                Status
                            </th>
                            <th class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($user_reservations_stm->fetch()){
                            echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                            <th class='flex items-center px-6 py-1 text-gray-900'>
                                <img class='h-16' src='https://photo.cuisineactuelle.fr/imgre/scale/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FCAC.2Fvar.2Fcui.2Fstorage.2Fimages.2Fvideos.2Frecettes-en-video.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2F3791204-1-fre-FR.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2Ejpg/autox600/quality/65/crop-from/center/picture.jpeg' alt='Jese image'>
                                <div class='ps-3'>
                                    <div class='text-base font-semibold'>$menu_title</div>
                                    <div class='font-normal text-gray-500'>$menu_description</div>
                                </div>
                            </th>
                            <td class='px-6 py-3'>
                                $reservation_date
                            </td>
                            <td class='px-6 py-4'>
                                <div class='flex items-center'>
                                    <div class='h-2.5 w-2.5 rounded-full bg-yellow-500 me-2'></div> $status
                                </div>
                            </td>
                            <td class='px-6 py-4'>
                                <a href='#' class='font-medium text-red-600 hover:underline'>Cancel Reservation</a>
                            </td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>