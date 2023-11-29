<?php

$con = new mysqli('localhost', 'root', '', 'crud_db');

if ($con) {
    echo "connection success";
} else {
    die(mysqli_error($con));
}



?>