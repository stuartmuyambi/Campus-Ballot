<?php
    include('functions.php'); //add function.php script to page
    $pageTitle = $_SESSION['user']['username'] . " - Campus Ballot";

    //Prevent unauthorised user access to this page
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "Please login to continue";
        header('location: login.php');
    }

?>

<?php include("includes/header.php"); ?>

    <!-- Main Body  -->
    <div class="main-body">
        <section class="mt-2 pt-5 pb-5">
            <div class="thumbs-container shadow pt-4 pl-5 pr-5 pb-5">
                <p><a href="index.php" class="home-pagination">Home</a></p>
                <h3 class="voting-heading">Available Candidates</h3>
               
            </div>
        </section>
    </div>

<?php include("includes/footer.php"); ?>
