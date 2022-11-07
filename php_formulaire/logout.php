<?php
$user = "lampp";
$password = "lampp";
$database = "lampp";
$table = "employee";
$conn= new PDO("pgsql:host=192.168.52.142;dbname=$database", $user, $password);
$_SESSION = [];
session_unset();
session_destroy();
header("Location: index.php");

