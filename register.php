<?php include('functions.php') ?>
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
    <title>Register - Campus Ballot</title>
</head>
<body class="login-body">
    <div class="form-container shadow">
        <div class="form-section dark-form-section">
            <i class="fas fa-vote-yea vote-icon"></i>
            <h1 class="slogan" id="slogan">Your <span class="vote">vote</span> your <span class="line">voice.</span></h1>
        </div>

        <div class="form-section white-form-section">
            <div class="input-container">
                <h2 class="text-logo"><i class="fas fa-vote-yea"></i> Campus Ballot</h2>
                <p class="lead">Let's help you create your account!</p>

                <form action="register.php" method="post">

                <?php echo display_error(); ?>

                    <div class="input-group mt-2 mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="username" autocomplete="off" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                        </div>
                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
                    </div>

                    <!-- <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-address-card"></i></div>
                        </div>
                        <input type="text" name="uid" class="form-control" placeholder="ID Number">
                    </div> -->

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" name="password_1" class="form-control" placeholder="Password">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" name="password_2" class="form-control" placeholder="Confirm Password">
                    </div>

                        <button type="submit" name="register_btn" class="btn btn-primary btn-block mt-3">Create Account</button>

                    <p class="mt-3">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>