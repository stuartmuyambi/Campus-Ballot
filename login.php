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
    <title>Login - Campus Ballot</title>
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
                <p class="lead" style="color: #6c757d;">We're happy to see you again!</p>

                <form action="login.php" method="post">

                <?php echo display_error(); ?>

                    <div class="input-group mt-5 pt-2 mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="custom-control custom-checkbox mr-sm-2 mt-3">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing" style="color: #6c757d;">Remember me</label>
                    </div>

                        <button type="submit" name="login_btn" class="btn btn-primary btn-block mt-4">Login</button>
                        <p class="mt-3" style="color: #6c757d;">Don't have an account yet? <a href="register.php">Register Now!</a></p>

                    </form>
            </div>
        </div>
    </div>

</body>
</html>