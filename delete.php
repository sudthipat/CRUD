<?php
include 'connect.php';

if(isset($_GET['did'])) {
    $did = $_GET['did'];

    $sql = "DELETE FROM crud WHERE id = $did";

    $result = mysqli_query($con, $sql);

    if($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }

}