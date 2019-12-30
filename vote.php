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
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">P.ID</th>
                        <th scope="col">Guild Posts</th>
                        <th scope="col">Candidates</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>
