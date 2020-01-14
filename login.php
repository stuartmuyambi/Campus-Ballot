<?php 
    include('functions.php');
    $pageTitle = "Login - Campus Ballot";

?>

<?php include("includes/boilerplate.php")?>

<body class="login-body">

    <main class="form-container shadow">

        <section class="form-section dark-form-section">
            <i class="fas fa-vote-yea vote-icon"></i>
            <h1 class="slogan" id="slogan">Your <span class="vote">vote</span> your <span class="line">voice.</span></h1>
        </section>

        <section class="form-section white-form-section">
            
            <section class="input-container">
                <h2 class="text-logo"><i class="fas fa-vote-yea"></i> Campus Ballot</h2>
                <p class="lead" style="color: #6c757d;">We're happy to see you again!</p>

                <form action="login.php" method="post">
                    <?php echo display_error(); ?>
                    
                    <div class="input-group mt-3 mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                    </div>

                    <!-- check box for toggle password if required
                    <div class="custom-control custom-checkbox mr-sm-2 mt-3">
                        <input type="checkbox" class="custom-control-input" id="showPassword">
                        <label class="custom-control-label" onclick="togglePassword()" for="showPassword" style="color: #6c757d;">Show password</label>
                    </div> -->

                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="showPassword">
                        <label class="custom-control-label" for="showPassword" onclick="togglePassword()" style="color: #6c757d">Show password</label>
                    </div>

                    <button type="submit" name="login_btn" class="btn btn-primary btn-block mt-4">Login</button>
                    <p class="mt-3" style="color: #6c757d;">Don't have an account yet? <a href="register.php">Sign up</a></p>
                </form>
            </section>

        </section>
    </main>

<?php include("includes/footer.php")?>
