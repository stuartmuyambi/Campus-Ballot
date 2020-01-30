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
            
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                </div>
                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search table">
            </div>

        <table class="table table-striped" id="myTable">
            <thead class="thead-dark">
                <tr>
                <th scope="col">V.ID</th>
                <th scope="col">Guild Post</th>
                <th scope="col">Candidates</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Guild President</td>
                <td>Stuart Muyambi</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Guild Speaker</td>
                <td>Male Joel</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Academic Minister</td>
                <td>Musenero Rebeca</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
            
        </section>
        
    </div>

<?php include("includes/footer.php"); ?>
