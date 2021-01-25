<?php

function emptyInputSignup($name, $pwd, $pwdrepeat) {
    $result;
    if (empty($name) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
    $result;
    if ($pwd !== $pwdrepeat){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $name) {
    $sql = "SELECT * FROM admin_table where username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s", $name);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn,$name,$pwd) {
    $sql = " INSERT INTO admin_table (username, password) values(?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed1");
        exit();
    }

    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ss", $name,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($name, $pwd) {
    $result;
    if (empty($name) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn,$name,$pwd){
    $uidExists = uidExists($conn, $name);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed =$uidExists["password"];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["name"] = $uidExists["username"];
        header("location: ../index.php");
        exit();
    }
}

function emptyInputVideo($vLink, $vDescription) {
    $result;
    if (empty($vLink) || empty($vDescription)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function addvideo($conn,$vLink,$vDescription ) {
    $sql = " INSERT INTO video_table (vLink, vDescription) values(?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../addvideo.php?error=stmtfailed1");
        exit();
    }


    mysqli_stmt_bind_param($stmt,"ss", $vLink,$vDescription);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addvideo.php?error=none");
    exit();
}

function editvideo($conn,$vLink,$vDescription ) {
    $sql = " UPDATE video_table  SET (vLink, vDescription, vID) values(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../editvideo.php?error=stmtfailed1");
        exit();
    }


    mysqli_stmt_bind_param($stmt,"sss", $vLink,$vDescription,$vID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../editvideo.php?error=none");
    exit();
}

