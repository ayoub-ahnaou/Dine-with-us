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
    <div class="bg-gray-50 w-full min-h-[100vh] flex flex-col justify-between items-center">
        <div class="bg-gray-100 w-full flex items-center gap-1 p-2">
            <img src="../assets/images/icons/arrow-left.svg" class="size-4" alt="">
            <a href="../home.php" class="hover:underline cursor-pointer">Back to home page</a>
        </div>

        <div class="flex-grow flex items-center">
            <div class="bg-white w-[400px] h-auto shadow-lg rounded-md flex flex-col">
                <h1 class="p-4 border border-transparent border-l-black font-bold text-xl text-center">REGISTER</h1>
                <div class="p-6 flex flex-col text-sm gap-2">
                    <div class="flex flex-col">
                        <label class="text-gray-500" for="username">username </label>
                        <input type="text" name="username" id="username" placeholder="e.g: Jhone Dow" class="bg-gray-100 rounded-sm p-1">
                        <!-- <p class="text-red-500">Email already used or invalid</p> -->
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500" for="email">email </label>
                        <input type="email" name="email" id="email" placeholder="e.g: example@gmail.com" class="bg-gray-100 rounded-sm p-1">
                        <!-- <p class="text-red-500">Email already used or invalid</p> -->
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500" for="password">password </label>
                        <input type="password" name="password" id="password" placeholder="password" class="bg-gray-100 rounded-sm p-1">
                        <!-- <p class="text-red-500">Password are incorrect</p> -->
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500" for="confirm-password">confirm password </label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="confirm password" class="bg-gray-100 rounded-sm p-1">
                        <!-- <p class="text-red-500">Password are incorrect</p> -->
                        <div class="flex gap-1 mt-2">
                            <input type="checkbox" name="show-pwd" id="show-pwd">
                            <label for="show-pwd">show password</label>
                        </div>
                    </div>


                    <input type="submit" name="submit" id="submit" value="Register" class="bg-black rounded-md p-2 mt-8 text-white">
                    <p class="mt-1">Already have an Account? <a class="font-bold hover:underline" href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>