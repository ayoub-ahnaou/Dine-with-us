<?php 
    session_start();
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        $avatar = $_SESSION["avatar"];
        $role = $_SESSION["role"];
    }
?>

<nav
    class="flex items-center justify-between px-20 max-md:px-6 max-sm:px-2 shadow-md text-gray-700 sticky top-0 bg-gray-50 z-10">
    <ul class="h-full flex items-center">
        <li class="mr-8" href="./index.html">
            <a
                class="mr-8 flex items-center gap-1 cursor-pointer"
                href="./home.php">
                <span>Le-CHEF</span>
            </a>
        </li>
    </ul>
    <div
        class="flex items-center flex-1 justify-between text-sm max-md:hidden">
        <ul class="flex items-center">
            <li>
                <a
                    class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear"
                    href="./home.php">Home</a>
            </li>
            <li>
                <a
                    class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear"
                    href="./reservation.php">Reservations</a>
            </li>
            <li>
                <a
                    class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear"
                    href="./menu.php">Menu</a>
            </li>
            <li>
                <a
                    class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear"
                    href="./about.php">About</a>
            </li>
            <li>
                <a
                    class="hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear"
                    href="./contact.php">Contact</a>
            </li>
            <?php 
            if($role == 2){
                echo "<li>
                <a
                class='hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear'
                href='./dashboard.php'>Dashboard</a>
                </li>";
            }
            ?>
        </ul>
        <div class="flex items-center h-full gap-4">
            <?php 
                if(isset($_SESSION["username"])){
                    echo "<a
                        href='./profile.php'
                        class='flex items-center hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear gap-2'>
                        <span>$username</span>
                        <img
                            src=$avatar
                            class='size-5'
                            alt='' />
                    </a>";

                }
                else{
                    echo "<a
                        href='./login.php'
                        class='flex items-center hover:bg-gray-100 hover:border-b-gray-700 border-transparent border p-2 px-4 cursor-pointer transition-all delay-75 ease-linear gap-2'>
                        <span>Login</span>
                        <img
                            src='../assets/images/icons/'
                            class='size-5'
                            alt='' />
                    </a>";
                }
            ?>
        </div>
    </div>
    <!-- <img src="../assets/images/icons/menu.svg" class="size-4 hidden max-md:block" alt=""> -->
</nav>