<?php
session_start();
$mysqli = new mysqli('localhost','root','','hw4db') or die(mysqli_error($mysqli));

$vID = 0;
$vLink = '';
$vDescription = '';

if(isset($_GET['edit'])){
    $vID =$_GET['edit'];
    $result = $mysqli->query("SELECT * FROM video_table WHERE vID=$vID") or die($mysqli->error());
    if (mysqli_num_rows($result)==1){
        $row = $result-> fetch_array();
        $vLink = $row['vLink'];
        $vDescription = $row['vDescription'];
    }
}

if(isset($_GET['delete'])){
    $vID = $_GET['delete'];
    $vDel = $_GET['delete'];
    $mysqli->query("UPDATE video_table  SET vDel=true  where  vID=$vID") or die(mysqli_error($mysqli));

    $_SESSION['message'] = "Video has been deleted!";
    $_SESSION['msg_type'] ="danger";

    header("location: index.php");

}

if (isset($_POST['update']))
{
    $vID = $_POST['vID'];
    $vLink = $_POST['vLink'];
    $vDescription = $_POST['vDescription'];

    if ($vLink === "" || $vDescription === "") {

        $_SESSION['message'] = "Video Information cannot be empty !!";
        header("location: index.php");
    }
    else {

    $mysqli->query("UPDATE video_table  SET vLink='$vLink', vDescription='$vDescription' where  vID=$vID") or
    die($mysqli->error());

    $_SESSION['message'] = "Video has been updated!";
    $_SESSION['msg_type'] ="warning";
    header("location: index.php");
}}


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Video</title>


    <link href="css/css/font-face.css" rel="stylesheet" media="all">
    <link href="css/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="css/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="css/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="css/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="css/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="css/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="css/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="css/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="css/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="css/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="css/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="css/css/theme.css" rel="stylesheet" media="all">

</head>



<body class="animsition">



<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">

                    <section class="signup-form">
                        <div class="login-form">
                            <form action="editvideo.php" method="POST">

                                <input type="hidden" name="vID" value="<?php echo $vID; ?>">
                                <div class="form-group">
                                    <label>Youtube link</label>
                                    <input class="au-input au-input--full" type="text" name="vLink" value="<?php echo $vLink; ?>" placeholder="Enter link"">
                                </div>
                                <div class="form-group">
                                    <label>Video Description</label>
                                    <input class="au-input au-input--full" type="text" name="vDescription" value="<?php echo $vDescription; ?>" placeholder="Enter Description">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="update">Update</button>
                                <input class="au-btn au-btn--block btn-danger m-b-20" type="button" onclick="location.href='index.php';" value="Go Back" />
                            </form>

                        </div>
                        <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all field!</p>";
                            }

                            else if ($_GET["error"] == "none") {
                                echo "<p>You added video!</p>";

                            }
                        }
                        ?>

                    </section>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery JS-->
<script src="css/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="css/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="css/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="css/vendor/slick/slick.min.js">
</script>
<script src="css/vendor/wow/wow.min.js"></script>
<script src="css/vendor/animsition/animsition.min.js"></script>
<script src="css/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="css/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="css/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="css/vendor/circle-progress/circle-progress.min.js"></script>
<script src="css/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="css/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="css/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="css/js/main.js"></script>

</body>

</html>

