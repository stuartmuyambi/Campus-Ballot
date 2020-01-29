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
        <section class="thumbs-container shadow mt-5 pt-4 pl-5 pr-5 pb-5">
            <p><a href="index.php" class="home-pagination">Home</a></p>
            <h3 class="voting-heading pb-3">Guild Nominations</h3>
            <hr class="pb-4">

            <section class="vote-section shadow-sm pt-4 pb-4 pr-5 pl-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Mark</th>
                    <td>Mark</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">Jacob</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    </tr>
                    <tr>
                    <th scope="row">Larry</th>
                    <td>Larry</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
                </table>
            </section>

            
        </section>
    </div>

<?php include("includes/footer.php"); ?>
