<?php
include_once "db.php";
session_start();
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $userQuery = "SELECT * FROM user WHERE id = '$user_id'";
    $result = mysqli_query($connection, $userQuery);
    $user = mysqli_fetch_assoc($result);
}

include_once "header.php";
include_once "sidebar.php";

if (isset($_GET['reservation'])){
    include_once "reservation.php";
}

include_once "footer.php";
?>



