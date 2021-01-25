<?php

if (isset($_POST["submit"])) {

    $vLink = $_POST["vLink"];
    $vDescription = $_POST["vDescription"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputVideo($vLink, $vDescription ) !== false) {
        header("location: ../addvideo.php?error=emptyinput");
        exit();
    }


    addvideo($conn,$vLink,$vDescription );
}
else {
    header("location: ../index.php");
    exit();
}