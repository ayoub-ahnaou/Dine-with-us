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
        $all_menus = $connect->prepare("SELECT menu_id, menu_title, menu_description, menu_picture FROM menu");
        $all_menus->execute();
        $all_menus->bind_result($menu_id, $menu_title, $menu_description, $menu_picture);
        ?>

        <section class="flex flex-grow flex-col gap-4 px-20 max-md:px-6 max-sm:px-2 py-4">
            <div class="">
                <h1 class="text-2xl">Explore Menus</h1>
                <img src="" alt="">
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php 
                while($all_menus->fetch()){
                    echo "<div class='flex flex-col gap-1'>
                        <img class='h-auto max-w-full rounded-lg' src='https://photo.cuisineactuelle.fr/imgre/scale/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FCAC.2F2019.2F09.2F20.2Fc7176c79-4cce-46da-a6db-786d43c41fbf.2Ejpeg/autox600/quality/65/crop-from/center/picture.jpeg' alt=''>
                        <p class='text-gray-700'>$menu_title</p>
                        <p class='text-gray-500 text-sm'>$menu_description</p>
                    </div>";
                }
                ?>
            </div>
            <!-- <div class="w-full h-10 flex items-center justify-center gap-4">
                <img src="../assets/images/icons/arrow-left.svg" class="size-5" alt="">
                <span class="hover:bg-gray-100 rounded-full w-6 cursor-pointer text-center">1</span>
                <span class="hover:bg-gray-100 rounded-full w-6 cursor-pointer text-center">2</span>
                <span class="hover:bg-gray-100 rounded-full w-6 cursor-pointer text-center">3</span>
                <span class="hover:bg-gray-100 rounded-full w-6 cursor-pointer text-center">4</span>
                <span class="hover:bg-gray-100 rounded-full w-6 cursor-pointer text-center">...</span>
                <span class="hover:bg-gray-100 rounded-full w-6 cursor-pointer text-center">99</span>
                <img src="../assets/images/icons/arrow-left.svg" class="size-5 rotate-180" alt="">
            </div> -->
        </section>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>