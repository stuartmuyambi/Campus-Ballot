<?php
    include('functions.php'); //add function.php script to page

    //Prevent unauthorised user access to this page
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "Please login to continue";
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home - Campus Ballot</title>
</head>
<body class="index-body">
    <!-- Dashboard Navigation Menu -->
    <div class="dash-nav">
        <div class="dash-section-1">
            <h2 class="dash-logo"><i class="fas fa-vote-yea"></i> Campus Ballot</h2>
        </div>

        <div class="dash-section-2">
        </div>

        <div class="dash-section-3">
        <?php  if(isset($_SESSION['user'])) : ?>
            <a href="index.php?logout='1'">
                <i class="fas fa-power-off fa-lg" style="color: #bb1333;"> </i> <span class="logout"> Logout</span></a>
        <?php  endif ?>
        </div>
    </div>
    <!-- End of Dashboard Navigation  -->

    <!-- Main Body  -->
    <div class="main-body">

    <?php  if(isset($_SESSION['user'])) : ?>
        <h1 class="display-4">Welcome <?php echo $_SESSION['user']['username'];?></strong>
    <?php  endif ?>

    <p class="index-slogan mb-4">We're here to help you vote, Let your voice be heard. Tell us what you'd like to achieve:</p>

    <div class="card-section">

        <div class="card-container card-1">
            <header class="card-header">
                <i class="fas fa-vote-yea fa-3x"></i>
            </header>
            <footer class="card-footer">
                <p>cast vote</p>
            </footer>
        </div>

        <div class="card-container card-2">
            <header class="card-header">
                <i class="fas fa-user-friends fa-3x"></i>
            </header>
            <footer class="card-footer">
                <p>view candidates</p>
            </footer>
        </div>

        <div class="card-container card-3">
            <header class="card-header">
                <i class="fas fa-chart-pie fa-3x"></i>
            </header>
            <footer class="card-footer">
                <p>check poll results</p>
            </footer>
        </div>

    </div>
    <!-- End of main body  -->
</body>
</html>