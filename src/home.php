<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
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
    </div>
</body>
</html>