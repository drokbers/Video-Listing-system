<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Add video</title>

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
                            <form action="include/addvideo.inc.php" method="POST">
                                <div class="form-group">
                                    <label>Youtube link</label>
                                    <input class="au-input au-input--full" type="text" name="vLink" required placeholder="Video link">
                                </div>
                                <div class="form-group">
                                    <label>Video Description</label>
                                    <input class="au-input au-input--full" name="vDescription" required placeholder="Video Description ">
                                </div>
                                <input  class="au-btn au-btn--block au-btn--green m-b-20"  type="submit" name="submit" value="submit">
                                <input class="au-btn au-btn--block btn-danger m-b-20" type="button" onclick="location.href='index.php';" value="Go Back" />
                            </form>

                        </div>
                        <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all field!</p>";
                            }

                            else if ($_GET["error"] == "none") {
                             ?>
                        <div class="card-body">
                            <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                <span class="badge badge-pill badge-primary">Success</span>
                                <?php echo "You added new video!!" ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          <?php
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
