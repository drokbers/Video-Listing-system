<?php
session_start();
include_once  'include/dbh.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <title>Index</title>
    <style>

        *{
            font-family: 'Montserrat', sans-serif;
        }
        body{
            background: #e5e5e5;
        }

        p{
            margin: 0 0 0 0;
        }

        .border{
            margin-top:20px;
            margin-bottom: 20px;
            display: inline;
        }

        .container{
            width: 50%;
            height:100px;
            margin: 0 auto;
            border-radius: 15px;
            padding: 5px;
            box-shadow: 0 3rem 6rem rgba(0, 0, 0, .14);
            background: #2A265F;
        }

        .image-section {
            display: inline-block;
            height:110px;
            padding-left:10px;
        }

        .image-section img{
            margin-top:5px;
            border-radius: 6px;
        }
        .title-date{
            display: inline-block;
            height: 100px;
            position: absolute;
            margin-left:20px;
        }
        .title-date > .course-title{
            position: relative;
            top: 32px;
        }

        .title-date > .course-title > p{
            font-weight: 700;
            font-size:16px;
            color:white;
        }

        .title-date > .release-date{
            position: relative;
            top: 35px;
        }

        .title-date > .release-date > p{
            font-size: 13px;
            font-weight: 400;
            color:white;
        }

        .buttons {
            display: inline-block;
            height: 100px;
            position: absolute;
            margin-left: 450px;
        }


        .buttons > .add-button{
            position:relative;
            margin-top:22px;
        }

        .buttons > .delete-button{
            position:relative;
            margin-top:5px;
        }

        button{
            padding:5px;
            width:100px;
            border-radius: 5px;
            border:none;
            color:black;
            font-weight:700;
        }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }


    </style>

    <!-- Main CSS-->
    <link href="/css/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<div class="topnav">
    <a class="active" href="#home">Home</a>

    <a style=" float: right;  width: 300px;" href="addvideo.php" class="btn btn-danger">ADD VIDEO</a>
</div>

<?php require_once 'include/functions.inc.php'; ?>


<?php


$sql = "SELECT `vLink` , `vID` ,`vDescription`, `vDate` , `vDel` FROM `video_table` WHERE `vDel` = 0 ";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
{

    ?>
    <?php
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="border">
            <div class="container">
                <div class="image-section">
                    <div class="image"><a href="<?php echo $row["vLink"]?> "target="_blank"><img src="https://img.youtube.com/vi/"></a></div>
                </div>
                <div class="title-date">
                    <div class="course-title"><p><?php echo $row["vDescription"] ?></p></div>
                    <div class="release-date"><p><?php echo $row["vDate"] ?></p></div>
                </div>
                <div class="buttons">

                    <a href="editvideo.php?edit=<?php echo $row["vID"];  ?>"
                       class="btn btn-warning">Edit</a>
                    <a href="editvideo.php?delete=<?php echo $row["vID"];  ?>" class="btn btn-danger"
                       onClick="javascript: return confirm('Are u sure?');">Delete</a>




                </div>
            </div>
        </div>

    <?php }} ?>




<!-- Jquery JS-->
<script src="/css/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/css/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/css/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="/css/vendor/slick/slick.min.js">
</script>
<script src="/css/vendor/wow/wow.min.js"></script>
<script src="/css/vendor/animsition/animsition.min.js"></script>
<script src="/css/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="/css/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="/css/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="/css/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/css/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/css/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="/css/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="/css/js/main.js"></script>

</body>
</html>