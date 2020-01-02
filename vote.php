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
            <div class="table-container shadow pt-5 pl-5 pr-5 pb-5">

                <div class="input-group pb-4">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                    </div>
                    <input type="text" class="form-control" id="myInput" onkeyup="filterTable()" placeholder="Search">
                </div>
                
            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>
