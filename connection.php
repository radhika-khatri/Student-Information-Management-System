<?php
$localhost = "";
$username = "";
$password = "";
$dbname = "";


// Create connection
$connect = new mysqli($localhost, $username, $password, $dbname);


// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}