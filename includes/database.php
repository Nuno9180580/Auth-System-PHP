<?php

//params to connect to DB
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "myDB";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn) {
    die("Database Connection Failed!");
}
