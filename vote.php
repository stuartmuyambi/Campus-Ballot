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
    <h1 class="display-4 mt-3">Sounds Great!</h1>
    <p class="index-slogan mt-2 mb-4">We're excited you've decided to cast your vote today. Let's help you get started.</p>

        <section class="thumbs-container shadow mt-5 pt-4 pl-5 pr-5 pb-5">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
            
        </section>
        
    </div>

<?php include("includes/footer.php"); ?>
