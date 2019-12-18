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
<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <?php  if(isset($_SESSION['user'])) : ?>
                <h1 class="display-4" style="text-align:center;">Hello <?php echo $_SESSION['user']['username'];?>!</h1>
                <p class="lead">We're happy to have you here again!<br><br>
                <a href="index.php?logout='1'" class="btn btn-danger btn-lg" style="text-align:center;">Logout <i class="fas fa-sign-out-alt"></i></a>
                </p>
            <?php  endif ?>
        </div>

    </div>
</body>
</html>