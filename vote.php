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
        <div class="voters-container mt-5 pt-5 pb-5">
            <div class="table-container shadow">
                <div class="ribbon">
                    ...
                </div>

            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>
