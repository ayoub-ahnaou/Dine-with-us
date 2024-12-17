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
        <nav class="flex items-center justify-between px-20 max-md:px-6 max-sm:px-2 shadow-md text-gray-700 sticky top-0 bg-gray-50 z-10">
            <ul class="h-full flex items-center">
                <li class="mr-8" href="./index.html">
                    <a class="mr-8 flex items-center gap-1 cursor-pointer" href="./home.php">
                        <span>Le-CHEF</span>
                    </a>
                </li>
            </ul>
            <div class="flex items-center flex-1 justify-between text-sm max-md:hidden">
                <ul class="flex items-center">
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./home.php">Home</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./reservation.php">Reservations</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./menu.php">Menu</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./about.php">About</a></li>
                    <li><a class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear" href="./contact.php">Contact</a></li>
                </ul>
                <div class="flex items-center h-full gap-4">
                    <a href="./login.php" class="flex items-center hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear gap-2">
                        <span>Login</span>
                        <img src="../assets/images/icons/user.svg" class="size-5" alt="">
                    </a>
                </div>
            </div>
            <!-- <img src="../assets/images/icons/menu.svg" class="size-4 hidden max-md:block" alt=""> -->
        </nav>

        <div class="flex-grow flex flex-col px-20 max-md:px-6 max-sm:px-2 py-6 gap-3">
            <p class="text-2xl">Menu Details</p>
            <hr>
            <div class="flex flex-col">
                <span class="text-gray-500 text-lg">Menu #432</span>
                <p class="text-gray-400 text-sm w-4/5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quos earum blanditiis ut odit modi quam tempore aut eos quae, iusto, inventore corporis libero accusamus, velit sunt quia aspernatur perferendis consectetur saepe. Fugiat minus provident nulla nihil eos earum illo deleniti, corporis veniam doloremque necessitatibus sed tenetur explicabo cumque debitis.</p>
            </div>
            <!-- plats cards -->
            <div class="bg-gray-100 rounded-lg flex flex-col p-2 gap-2">
                <div class="bg-white w-full h-32 rounded-md flex p-2">
                    <img class="h-full" src="https://photo.cuisineactuelle.fr/imgre/scale/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FCAC.2Fvar.2Fcui.2Fstorage.2Fimages.2Fvideos.2Frecettes-en-video.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2F3791204-1-fre-FR.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2Ejpg/autox600/quality/65/crop-from/center/picture.jpeg" alt="">
                    <div class="flex flex-col px-2">
                        <p class="text-gray-700 text-xl"># Principale</p>
                        <p class="text-gray-500 text-sm w-4/5"><strong>ingrediants:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias eaque dolorum unde atque vero placeat quasi in soluta rerum, voluptate ipsum eum consectetur consequatur. Aperiam delectus enim, quo inventore voluptatibus at in eaque quae modi qui corporis magni repellendus optio voluptas? Laboriosam a ipsa aliquid sequi voluptate corporis placeat rem?</p>
                    </div>
                </div>
                <div class="bg-white w-full h-32 rounded-md flex p-2">
                    <img class="h-full" src="https://photo.cuisineactuelle.fr/imgre/scale/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FCAC.2Fvar.2Fcui.2Fstorage.2Fimages.2Fvideos.2Frecettes-en-video.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2F3791204-1-fre-FR.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2Ejpg/autox600/quality/65/crop-from/center/picture.jpeg" alt="">
                    <div class="flex flex-col px-2">
                        <p class="text-gray-700 text-xl"># Dessert</p>
                        <p class="text-gray-500 text-sm w-4/5"><strong>ingrediants:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias eaque dolorum unde atque vero placeat quasi in soluta rerum, voluptate ipsum eum consectetur consequatur. Aperiam delectus enim, quo inventore voluptatibus at in eaque quae modi qui corporis magni repellendus optio voluptas? Laboriosam a ipsa aliquid sequi voluptate corporis placeat rem?</p>
                    </div>
                </div>
                <div class="bg-white w-full h-32 rounded-md flex p-2">
                    <img class="h-full" src="https://photo.cuisineactuelle.fr/imgre/scale/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FCAC.2Fvar.2Fcui.2Fstorage.2Fimages.2Fvideos.2Frecettes-en-video.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2F3791204-1-fre-FR.2Ftourte-au-poulet-petits-legumes-et-orange-en-video.2Ejpg/autox600/quality/65/crop-from/center/picture.jpeg" alt="">
                    <div class="flex flex-col px-2">
                        <p class="text-gray-700 text-xl"># Entrée</p>
                        <p class="text-gray-500 text-sm w-4/5"><strong>ingrediants:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias eaque dolorum unde atque vero placeat quasi in soluta rerum, voluptate ipsum eum consectetur consequatur. Aperiam delectus enim, quo inventore voluptatibus at in eaque quae modi qui corporis magni repellendus optio voluptas? Laboriosam a ipsa aliquid sequi voluptate corporis placeat rem?</p>
                    </div>
                </div>

                <div class="flex justify-end mt-2">
                    <input type="submit" value="Book now !" class="bg-black text-white px-6 py-2 rounded-md" name="" id="">
                </div>
            </div>
        </div>
        
        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>