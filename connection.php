<?php
$localhost = "172.16.100.8";
$username = "prakash";
$password = "a";
$dbname = "prakashdb";


// Create connection
$connect = new mysqli($localhost, $username, $password, $dbname);


// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}