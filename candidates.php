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
    <div class="main-body">
        <div class="candidates-container mt-5 pt-5 pb-5 pr-5 pl-5">

                

        </div>
    </div>

<?php include("includes/footer.php") ?>