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
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <title>Dashboard - Campus Ballot</title>
</head>
<body>
    <div>
        <?php if(isset($_SESSION['user'])) : ?>
            <h1><?php echo $_SESSION['user']['username']; ?></h1>
            <small>
                <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                <br>
                <a href="home.php?logout='1'" style="color: red;">logout</a>
            </small>
        <?php endif ?>
    </div>
</body>
</html>