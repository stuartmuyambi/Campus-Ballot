<?php
    include('../../functions.php');

    if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../../login.php');
    }

    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: ../../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/main.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Dashboard - Campus Ballot</title>
</head>
<body class="dash-body">

    <!-- Dashboard Navigation Menu -->
    <div class="dash-nav shadow-sm">
        <div class="dash-section-1">
            <h2 class="dash-logo"><i class="fas fa-vote-yea"></i> Campus Ballot</h2>
        </div>

        <div class="dash-section-2">

        </div>

        <div class="dash-section-3">
            <div class="admin-profile">
                <img src="../../images/admin_profile.jpg" alt="Admin Profile Picture" class="admin-pic">
                <span class="dash-username">
                <?php if(isset($_SESSION['user'])) : ?>
                    <?php echo $_SESSION['user']['username']; ?>
                <?php endif ?>
                </span>
            </div>
        </div>
    </div>
    <!-- End of Dashboard Navigation  -->

    <!-- Dashboard body  -->
    <div class="main-section-container">
        <div class="main-section-1">
            <div class="side-nav">
                ...
            </div>
        </div>
        <div class="main-section-2">...</div>
        <div class="main-section-3">...</div>
    </div>

</body>
</html>