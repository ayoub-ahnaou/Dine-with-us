<?php
try{
    $connect = new mysqli("localhost", "root", "", "dine_with_us");
    echo "<p class='bg-green-100 text-green-600 px-1'>Connection succeced</p>";
}
catch (Exception $error) {
    echo "<p class='bg-red-100 text-red-600 px-1'>$error</p>";
}