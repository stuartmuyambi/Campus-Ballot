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
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Candidates - Campus Ballot</title>
</head>
<body class="index-body">
    <!-- Dashboard Navigation Menu -->
    <div class="dash-nav">
        <div class="dash-section-1">
            <h2 class="dash-logo"><i class="fas fa-vote-yea"></i> Campus Ballot</h2>
        </div>

        <div class="dash-section-2"></div>

        <div class="dash-section-3">
            <?php  if(isset($_SESSION['user'])) : ?>
                <a href="index.php?logout='1'">
                    <i class="fas fa-power-off fa-lg" style="color: #bb1333;"> </i> <span class="logout"> Logout</span>
                </a>
            <?php  endif ?>
        </div>

    </div>
    <!-- End of Dashboard Navigation  -->

    <!-- Main Body  -->
    <div class="main-body">
        <div class="voters-container mt-5 pt-5 pb-5 pr-5 pl-5">

                <button class="accordion">Section 1</button>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
                <button class="accordion">Section 3</button>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>

        </div>
    </div>

    <script src="js/main.js"></script>
    <!-- End of main body  -->
</body>
</html>