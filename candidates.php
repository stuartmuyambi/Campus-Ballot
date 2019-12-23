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

                <div class="accordion top-accordion">Guild President</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>

                <div class="accordion">Vice President</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>

                <div class="accordion bottom-accordion">Campus Mayor</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
                <div class="accordion bottom-accordion">Guild Speaker</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
                <div class="accordion bottom-accordion">Deputy Speaker</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
                <div class="accordion bottom-accordion">Guild Treasurer</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
                <div class="accordion bottom-accordion">Foreign Affairs Minister</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
                <div class="accordion bottom-accordion">Academic Minister</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>
                <div class="accordion bottom-accordion">Sports and Health Minister</div>
                <div class="panel">
                    <p>Lorem ipsum...</p>
                </div>

        </div>
    </div>

<?php include("includes/footer.php") ?>