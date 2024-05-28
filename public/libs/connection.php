<?php

$server = "127.0.0.1:3307";
$adminisrator = "root";
$adminisratorpassword = "";
$database = "gamesiteapp";

$connection = mysqli_connect($server, $adminisrator, $adminisratorpassword, $database);
mysqli_set_charset($connection, "UTF8");
if (mysqli_connect_errno() > 0) {
    die("error: " . mysqli_connect_errno());
}
