<?php

$localhost = "localhost";
$username = "root";
$password = "QvcPeru23$";
$dbname = "farmacia";
$store_url = "http://localhost/farmacia/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if ($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
