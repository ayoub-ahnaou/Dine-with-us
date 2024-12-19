<?php
try{
    $connect = mysqli_connect("localhost", "root", "", "dine_with_us");
    echo "<p class='bg-green-100 text-green-600 px-1'>Connection succeced</p>";
}
catch (Exception $error) {
    echo $error;
}