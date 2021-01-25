<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


    <title>Sıgnup</title>

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
                    <div class="login-logo">
                        <a href="#">

                        </a>
                    </div>
                    <section class="signup-form">
                        <div class="login-form">
                            <form action="include/signup.inc.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="name"  placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="pwd" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Repeat Password</label>
                                    <input class="au-input au-input--full" type="password" name="pwdrepeat" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="submit" type="submit">register</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="/hw4-0/login.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                        <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all field!</p>";
                            }
                            else if ($_GET["error"] == "passwordsdontmatch") {
                                echo "<p>Passwords doesnt match!</p>";
                            }
                            else if ($_GET["error"] == "stmtfailed") {
                                echo "<p>Ops.. Something went wrong :( </p>";
                            }
                            else if ($_GET["error"] == "usernametaken") {
                                echo "<p>Username is already taken!</p>";
                            }
                            else if ($_GET["error"] == "none") {
                                echo "<p>You signed up!</p>";

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
