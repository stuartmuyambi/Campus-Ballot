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
    <title>Home - Campus Ballot</title>
</head>
<body>
    <div>
        <?php  if(isset($_SESSION['user'])) : ?>
            <h1><?php echo $_SESSION['user']['username'];?></h1>
            <p>
                <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                <br>
            </p>
            <a href="index.php?logout='1'" style="color: red;">logout</a>
            <?php  endif ?>
        </div>
</body>
</html>