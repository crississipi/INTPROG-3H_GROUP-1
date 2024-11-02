<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pastry_shop";
$connect = new mysqli($host, $user, $pass, $db);
if ($connect->connect_error){
    die("Connection Failed".$conn->connect_error);
}
?>