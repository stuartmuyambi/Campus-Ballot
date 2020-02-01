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
        // MySQL query that selects all the poll answers
        $stmt = $pdo->prepare('SELECT * FROM poll_answers WHERE poll_id = ?');
        $stmt->execute([$_GET['id']]);
        // Fetch all the poll anwsers
        $poll_answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // If the user clicked the "Vote" button...
        if (isset($_POST['poll_answer'])) {
            // Update and increase the vote for the answer the user voted for
            $stmt = $pdo->prepare('UPDATE poll_answers SET votes = votes + 1 WHERE id = ?');
            $stmt->execute([$_POST['poll_answer']]);
            // Redirect user to the result page
            header ('Location: result.php?id=' . $_GET['id']);
            exit;
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
    <h1 class="display-4 mt-3">Alright this is it!</h1>
    <p class="index-slogan mt-2 mb-4">Be smart and do your part. Vote for the best, Forget the rest.</p>

        <section class="thumbs-container shadow mt-4 pt-4 pl-5 pr-5 pb-5">
        <div class="content poll-vote">
        <h2><?=$poll['title']?></h2>
        <p><?=$poll['desc']?></p>
        <form action="vote.php?id=<?=$_GET['id']?>" method="post">
            <?php for ($i = 0; $i < count($poll_answers); $i++): ?>
            <label>
                <input type="radio" name="poll_answer" value="<?=$poll_answers[$i]['id']?>"<?=$i == 0 ? ' checked' : ''?>>
                <?=$poll_answers[$i]['title']?>
            </label>
            <?php endfor; ?>
            <div>
                <input type="submit" value="Vote">
            </div>
        </form>
    </div>
            
        </section>
        
    </div>

<?php include("includes/footer.php"); ?>
