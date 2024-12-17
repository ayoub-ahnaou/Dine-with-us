<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/input.css">
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-[Oswald]">
    <div class="min-h-[100vh] flex flex-col">
        <nav class="flex items-center justify-between px-10 max-sm:px-2 shadow-md text-gray-700 bg-gray-50 z-10">
            <ul class="h-full flex items-center">
                <li class="mr-8" href="./index.html">
                    <a class="mr-8 flex items-center gap-1 cursor-pointer" href="./home.php">
                        <span>Le-CHEF</span>
                    </a>
                </li>
            </ul>
            <div class="flex items-center flex-1 justify-between text-sm max-md:hidden">
                <ul class="flex items-center">
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./dashboard.php">Home</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./explore.php">Reservations</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./explore.php">Menu</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./explore.php">About</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./explore.php">Contact</a></li>
                </ul>
                <div class="flex items-center h-full gap-4">
                    <div class="flex items-center hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear gap-2">
                        <span>Login</span>
                        <img src="./assets/images/icons/user.svg" class="size-5" alt="">
                    </div>
                </div>
            </div>
            <!-- <img src="../assets/images/icons/menu.svg" class="size-4 hidden max-md:block" alt=""> -->
        </nav>

        <div class="flex-grow">
            <div class="h-[80vh] relative">
                <img src="https://d2d9hom4y5lr0f.cloudfront.net/2023/02/Kadeau-Copenhagen-Kitchen-Chefs-Marie-Louise-Munkegaard-Six-Michelin-Star-Restaurants-in-Copenhagen-Scandinavia-Standard.jpg" class="w-full object-cover h-full" alt="">
                <div class="absolute top-0 bottom-0 w-full flex items-end justify-center">
                    <div class="gap-3 flex justify-center items-center pb-10 flex-col w-full bg-gradient-to-b from-transparent to-black">
                        <p class="text-5xl text-white p-4">Welcome to Le Chef – Your Destination for Culinary Excellence!</p>
                        <p class="text-white text-2xl w-2/3 max-lg:w-full px-4 text-center">
                            At Le Chef, we believe every meal tells a story. Our mission is to bring you a world of flavors, passion, and creativity straight to your table. From exquisite recipes to expert tips, we’re here to inspire your culinary journey and elevate every dining experience.
                        </p>
                        <button class="bg-white p-2 px-4 rounded-full">Ready to awaken your inner chef? Let’s cook something extraordinary together!</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>
</html>