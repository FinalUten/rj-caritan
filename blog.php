<?php

$dbserver = "localhost";
$username = "root";
$password = "";
$dbname = "demo_db";

$conn = mysqli_connect($dbserver, $username, $password, $dbname);

if (mysqli_connect_errno()) {
     echo "Failed to connect";
} else {
    include "../../index.html";
}
?>
