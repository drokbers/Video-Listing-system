<?php

if (isset($_POST["submit"])) {

    $vLink = $_POST["vLink"];
    $vDescription = $_POST["vDescription"];
    $vID = $_POST["vID"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    video($vLink,$vDescription, $vID);

    header("location: ../editvideo.php$vID");
    exit();
}