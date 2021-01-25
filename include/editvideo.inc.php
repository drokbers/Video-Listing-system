<?php
session_start();
 require_once 'dbh.inc.php';

 $vLink = '';
 $vDescription = '';

if(isset($_GET['edit'])){
    $vID =$_GET['edit'];
    $result = $conn->query("SELECT * FROM video_table WHERE vID=$vID") or die($conn->error());
    if(count($result)==1){
        $row = $result-> fetch_array();
        $vLink = $row['vLink'];
        $vDescription = $row['vDescription'];
    }
}