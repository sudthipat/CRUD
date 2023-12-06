<?php

$con = new mysqli('localhost', 'root', '', 'crud_db');

if(!$con) {
    die(mysqli_error($con));
    // echo"connection success";
}
?>