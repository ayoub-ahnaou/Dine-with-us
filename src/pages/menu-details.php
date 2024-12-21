<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Le CHEF</title>
    <link rel="stylesheet" href="../assets/css/input.css">
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
        if(!isset($_SESSION["username"])){
            header("location: ./login.php");
        }
        ?>
        
        <?php
        $menu_id = $_GET["menu_id"];
        $menu_details = $connect->prepare("SELECT menu_title, menu_description FROM menu WHERE menu_id = ?");
        $menu_details->bind_param("i", $menu_id);
        $menu_details->execute();
        $menu_details->bind_result($menu_title, $menu_description);
        ?>

        <div class="flex-grow flex flex-col px-20 max-md:px-6 max-sm:px-2 py-6 gap-3">
            <p class="text-2xl">Menu Details</p>
            <hr>
            <?php 
            while($menu_details->fetch()){
                echo "<div class='flex flex-col'>
                    <span class='text-gray-500 text-lg'>$menu_title</span>
                    <p class='text-gray-400 text-sm w-4/5'>$menu_description.</p>
                </div>";
            }
            $menu_details->close();
            ?>
            <!-- plats cards -->
            <?php
            $all_plats = $connect->prepare("SELECT plat_id, plat_title, ingredients, plat_type, plat_picture FROM plat WHERE menu_id = ?");
            $all_plats->bind_param("i", $menu_id);
            $all_plats->execute();
            $all_plats->bind_result($plat_id, $plat_title, $plat_ingredients, $plat_type, $plat_picture);
            ?>
            <div class="bg-gray-100 rounded-lg flex flex-col p-2 gap-2">
                <?php 
                while($all_plats->fetch()){
                    echo "<div class='bg-white w-full h-32 rounded-md flex p-2'>
                    <img class='h-full' src='https://photo.cuisineactuelle.fr/imgre/scale/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FCAC.2Fvar.2Fcui.2Fstorage.2Fimages.2Fvideos.2Frecettes-en-video.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2F3791204-1-fre-FR.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2Ejpg/autox600/quality/65/crop-from/center/picture.jpeg' alt=''>
                    <div class='flex flex-col px-2'>
                        <p class='text-gray-700 text-xl'># $plat_type</p>
                        <p class='text-gray-500 text-sm w-4/5'><strong>ingrediants:</strong> $plat_ingredients</p>
                    </div>
                </div>";
                }
                ?>

                <?php
                echo "<form method='post' action='./make-reservation.php?menu_id=$menu_id' class='flex justify-end mt-2'>
                    <input type='submit' value='Book now !' class='bg-black text-white px-6 py-2 rounded-md' name='' id=''>
                </form>";
                ?>
            </div>
        </div>
        
        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>