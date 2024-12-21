<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le CHEF - Home</title>
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
        $eight_menus_stm = $connect->prepare("SELECT menu_id, menu_title, menu_description, menu_picture FROM menu");
        $eight_menus_stm->execute();
        $eight_menus_stm->bind_result($menu_id, $menu_title, $menu_description, $menu_picture);
        ?>

        <div class="flex-grow flex flex-col gap-4">
            <div class="h-[80vh] relative">
                <img src="https://d2d9hom4y5lr0f.cloudfront.net/2023/02/Kadeau-Copenhagen-Kitchen-Chefs-Marie-Louise-Munkegaard-Six-Michelin-Star-Restaurants-in-Copenhagen-Scandinavia-Standard.jpg" class="w-full object-cover h-full" alt="">
                <div class="absolute top-0 bottom-0 w-full flex items-end justify-center">
                    <div class="gap-3 flex justify-center items-center pb-10 flex-col w-full bg-gradient-to-b from-transparent to-black">
                        <p class="text-5xl text-white p-4 max-md:text-2xl text-center">Welcome to Le Chef – Your Destination for Culinary Excellence!</p>
                        <p class="text-white text-2xl w-2/3 max-lg:w-full px-4 text-center max-md:text-lg">
                            At Le Chef, we believe every meal tells a story. Our mission is to bring you a world of flavors, passion, and creativity straight to your table. From exquisite recipes to expert tips, we’re here to inspire your culinary journey and elevate every dining experience.
                        </p>
                        <button class="bg-white p-2 px-4 rounded-full max-md:text-xs">Ready to awaken your inner chef? Let’s cook something extraordinary together!</button>
                    </div>
                </div>
            </div>

            <section class="flex flex-col gap-4 px-20 max-md:px-6 max-sm:px-2 pb-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl">Explore Menus</h1>
                    <a href="./menu.php" class="hover:bg-gray-100 px-4 py-1 text-sm">Show more</a>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <?php 
                    while($eight_menus_stm->fetch()){
                        echo "<a href='./menu-details.php?menu_id=$menu_id' class='flex flex-col gap-1'>
                            <img class='h-auto max-w-full rounded-lg' src='https://photo.cuisineactuelle.fr/imgre/scale/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FCAC.2F2019.2F09.2F20.2Fc7176c79-4cce-46da-a6db-786d43c41fbf.2Ejpeg/autox600/quality/65/crop-from/center/picture.jpeg' alt=''>
                            <p class='text-gray-700'>$menu_title</p>
                            <p class='text-gray-500 text-sm'>$menu_description</p>
                        </a>";
                    }
                    ?>
                </div>
            </section>
        </div>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>