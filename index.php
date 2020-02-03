<?php
    include('functions.php'); //add function.php script to page
    $pageTitle = $_SESSION['user']['username'] . " - Campus Ballot";

    //Prevent unauthorised user access to this page
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "Please login to continue";
        header('location: login.php');
    }
?>

<?php include("includes/header.php")?>

    <!-- Main Body  -->
    <main class="main-body">

        <?php  if(isset($_SESSION['user'])) : ?>
            <h1 class="display-4 mt-3">Hello <?php echo $_SESSION['user']['username'];?>
        <?php  endif ?>

        <p class="index-slogan mt-2 mb-4">We're here to securely assist you vote in a fast and easy way possible. Please select a card to proceed.</p>

        <section class="card-section mt-3">

            <a href="vote.php">
                <div class="card-container card-1 shrink">
                    <header class="card-header">
                        <i class="fas fa-vote-yea fa-3x mt-4"></i>
                    </header>
                    <footer class="card-footer">
                        <p> i want to cast my vote</p>
                    </footer>
                </div>
            </a>

            <a href="#">
                <div class="card-container card-2 shrink">
                    <header class="card-header">
                        <i class="fas fa-user-friends fa-3x mt-4"></i>
                    </header>
                    <footer class="card-footer">
                        <p>i want to view candidates</p>
                    </footer>
                </div>
            </a>

            <a href="#">
                <div class="card-container card-3 shrink">
                    <header class="card-header">
                        <i class="fas fa-chart-pie fa-3x mt-4"></i>
                    </header>
                    <footer class="card-footer">
                        <p>i want to check poll results</p>
                    </footer>
                </div>
            </a>

        </section>
    </main>

<?php include("includes/footer.php")?>
