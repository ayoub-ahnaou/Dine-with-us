<?php
include "../../config/connection.php";

session_start();
$reservation_id = $_GET["reservation_id"];
$user_id = $_SESSION["user_id"];

$cancel_res_stm = $connect->prepare("UPDATE reservation SET status = 'Canceled' WHERE user_id = ? AND reservation_id = ?");
$cancel_res_stm->bind_param("ii", $user_id, $reservation_id);
if($cancel_res_stm->execute()){
    $_SESSION["result"] = "Reservation canceled with succes";
    echo $user_id . "  " . $reservation_id;
    header("location:javascript://history.go(-1)");
} else {
    echo $connect->error;
}