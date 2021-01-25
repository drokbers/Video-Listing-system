<?php

$serverName = "localhost";
$dbUserName = "root";
$dBPassword = "";
$dbName = "hw4db";

$conn = mysqli_connect($serverName, $dbUserName,$dBPassword, $dbName );


if(!$conn) {
    die("Connection failed:" .mysqli_connect_error());
}


