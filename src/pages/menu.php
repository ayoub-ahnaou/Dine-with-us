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
                    echo "<a href='./menu-details.php?menu_id=$menu_id' class='flex flex-col gap-1'>
                        <img class='h-auto max-w-full rounded-lg' src='../../src/assets/images/plats/$menu_picture' alt=''>
                        <p class='text-gray-700'>$menu_title</p>
                        <p class='text-gray-500 text-sm'>$menu_description</p>
                    </a>";
                }
                ?>
            </div>
        </section>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>