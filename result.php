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
    // If the GET request "id" exists (poll id)...
    if (isset($_GET['id'])) {
        // MySQL query that selects the poll records by the GET request "id"
        $stmt = $pdo->prepare('SELECT * FROM polls WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        // Fetch the record
        $poll = $stmt->fetch(PDO::FETCH_ASSOC);
        // Check if the poll record exists with the id specified
        if ($poll) {
            // MySQL Query that will get all the answers from the "poll_answers" table ordered by the number of votes (descending)
            $stmt = $pdo->prepare('SELECT * FROM poll_answers WHERE poll_id = ? ORDER BY votes DESC');
            $stmt->execute([$_GET['id']]);
            // Fetch all poll answers
            $poll_answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Total number of votes, will be used to calculate the percentage
            $total_votes = 0;
            foreach ($poll_answers as $poll_answer) {
                // Every poll answers votes will be added to total votes
                $total_votes += $poll_answer['votes'];
            }
        } else {
            die ('Poll with that ID does not exist.');
        }
    } else {
        die ('No poll ID specified.');
    }
?>

<?php include("includes/header.php"); ?>

    <!-- Main Body  -->
    <div class="main-body">
    <h1 class="display-4 mt-3"><?=$poll['title']?> Results!</h1>
    <p class="index-slogan mt-2 mb-4">We're excited you've decided to cast your vote today. Let's help you get started.</p>

        <section class="thumbs-container shadow mt-4 pt-4 pl-5 pr-5 pb-5 mb-5">
        <div class="content poll-result">
        <h2><?=$poll['title']?></h2>
        <p><?=$poll['desc']?></p>
        <div class="wrapper">
            <?php foreach ($poll_answers as $poll_answer): ?>
            <div class="poll-question">
                <p><?=$poll_answer['title']?> <span>(<?=$poll_answer['votes']?> Votes)</span></p>
                <div class="result-bar" style= "width:<?=@round(($poll_answer['votes']/$total_votes)*100)?>%">
                    <?=@round(($poll_answer['votes']/$total_votes)*100)?>%
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
        
        </section>
        
    </div>

<?php include("includes/footer.php"); ?>
