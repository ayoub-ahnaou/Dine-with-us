<?php

session_start();
include "../config/connection.php";

$date_now = date('Y-m-d H:i:s');
$menu_id = $_GET["menu_id"];
$user_id = $_SESSION["user_id"];

// insert into reservation table
$insert_into_reservation_stm = $connect->prepare("INSERT INTO reservation (reservation_date, user_id) VALUES (?, ?)");

$insert_into_reservation_stm->bind_param("si", $date_now, $user_id);
if ($insert_into_reservation_stm->execute()) {
    $reservation_id = $connect->insert_id;
    $insert_into_reservation_stm->close();

    // insert into reservation_menu table
    $insert_into_reservation_menu_stm = $connect->prepare("INSERT INTO reservation_menu (reservation_id, menu_id) VALUES (?, ?)");
    $insert_into_reservation_menu_stm->bind_param("ii", $reservation_id, $menu_id);

    if ($insert_into_reservation_menu_stm->execute()) {
        echo "Reservation_menu record inserted succesfuly";
    } else {
        echo "Failed to add record reservation menu";
    }

    $insert_into_reservation_menu_stm->close();
    $_SESSION["result"] = "succes";
    header("location:javascript://history.go(-1)");
} else {
    echo "Failed to create reservation";
    $insert_into_reservation_stm->close();
    $_SESSION["result"] = "error";
    header("location:javascript://history.go(-1)");
}
