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
    <title><?php echo $pageTitle; ?></title>
</head>
<body class="index-body">
    <!-- Dashboard Navigation Menu -->
    <div class="dash-nav">
        <div class="dash-section-1">
            <h2 class="dash-logo"><a href="index.php"> <i class="fas fa-vote-yea"></i> Campus Ballot</a></h2>
        </div>

        <div class="dash-section-2"></div>

        <div class="dash-section-3 nav-icons">
            <a href="index.php"><i class="fas fa-home fa-lg icon"></i></a>
            <a href="#"><i class="fas fa-th fa-lg icon"></i></a>            
            <a href="#"><i class="fas fa-user-circle fa-lg icon"></i></a>
            <?php  if(isset($_SESSION['user'])) : ?>
                <a href="index.php?logout='1'">
                    <i class="fas fa-power-off fa-lg icon-logout"> </i>
                </a>
            <?php  endif ?>
        </div>

    </div>
    <!-- End of Dashboard Navigation  -->
