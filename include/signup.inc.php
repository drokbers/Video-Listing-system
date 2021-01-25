<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $name) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn,$name,$pwd);
}
else {
    header("location: ../signup.php");
    exit();
}