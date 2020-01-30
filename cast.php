<?php
    include('functions.php'); //add function.php script to page
    $pageTitle = $_SESSION['user']['username'] . " - Campus Ballot";

    //Prevent unauthorised user access to this page
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "Please login to continue";
        header('location: login.php');
    }

    // Connect to MySQL
    $pdo = pdo_connect_mysql();

    // MySQL query that selects all the polls and poll answers
    $stmt = $pdo->query('SELECT p.*, GROUP_CONCAT(pa.title ORDER BY pa.id) AS answers FROM polls p LEFT JOIN poll_answers pa ON pa.poll_id = p.id GROUP BY p.id');
    $polls = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("includes/header.php"); ?>

    <!-- Main Body  -->
    <div class="main-body">
    <h1 class="display-4 mt-3">Alright this is it!</h1>
    <p class="index-slogan mt-2 mb-4">Be smart and do your part. Vote for the best, Forget the rest.</p>

        <section class="thumbs-container shadow mt-4 pt-4 pl-5 pr-5 pb-5">
            <h3>Guild President</h3>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" value="customRadio1" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Stuart Muyambi</label>
            </div>
            
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" value="customRadio2"class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Lemi Simon Joseph</label>
            </div>

            </div>
            
        </section>
        
    </div>

<?php include("includes/footer.php"); ?>
