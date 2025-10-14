<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "banking_system";


$connection = mysqli_connect($host, $user, $password, $dbname);

if (!$connection) {
die();
}