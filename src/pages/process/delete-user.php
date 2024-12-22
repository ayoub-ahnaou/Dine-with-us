<?php
include "../../config/connection.php";

$user_id = $_GET["user_id"];
$user_stm = $connect->prepare("SELECT role_id FROM user WHERE user_id = ?");
$user_stm->bind_param("i", $user_id);
if($user_stm->execute()){
    $user_stm->bind_result($role);
    if($role == 2){
        $_SESSION["result"] = "Error while deleting an admin, you can't delete him right now.";
        $user_stm->close();
    } else {
        $user_stm->close();
        $delete_user_stm = $connect->prepare("DELETE FROM user WHERE user_id = ?");
        $delete_user_stm->bind_param("i", $user_id);

        if($delete_user_stm->execute()) $_SESSION["result"] = "User deleted with succes";
        else $_SESSION["result"] = "Something went wrong while deleting the user";

        $delete_user_stm->close();
    }
} else {
    echo "User not found ¯\_(ツ)_/¯";
    $user_stm->close();
}

header("location: javascript://history.go(-1)");