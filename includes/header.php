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
    <nav class="dash-nav">
        <div class="dash-section-1">
            <h2 class="dash-logo"><a href="index.php"> <i class="fas fa-vote-yea"></i> Campus Ballot</a></h2>
        </div>

        <div class="dash-section-2 nav-icons">

            <ul>
                <li><a href="index.php" title="home"><i class="fas fa-home fa-lg icon"></i></a></li>
                <li><a href="#" title="Messages"><i class="fas fa-envelope fa-lg icon"></i></a></li>
                <li><a href="#" title="Notifications"><i class="fas fa-bell fa-lg icon"></i></a></li>
                <li>
                    <?php  if(isset($_SESSION['user'])) : ?>
                        <a href="index.php?logout='1'" title="Logout">
                            <i class="fas fa-power-off fa-lg icon-logout"> </i>
                        </a>
                    <?php  endif ?>
                </li>
            </ul>
          
        </div>

    </nav>
    <!-- End of Dashboard Navigation  -->
