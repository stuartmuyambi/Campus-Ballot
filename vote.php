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
    <h1 class="display-4 mt-3">Sounds Great!</h1>
    <p class="index-slogan mt-2 mb-4">We're excited you've decided to cast your vote today. Let's help you get started.</p>

        <section class="thumbs-container shadow mt-4 pt-4 pl-5 pr-5 pb-5 mb-5">
            
            <div class="input-group mt-3 mb-3 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                </div>
                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Candidates">
            </div>

        <table class="table table-striped" id="myTable">
            <thead class="thead-dark">
                <tr>
                <th scope="col"></th>
                <th scope="col">Guild Post</th>
                <th scope="col">Candidates</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($polls as $poll): ?>
            <tr>
                <th scope="row">
                    <span class="avatar">
                        <?php
                            $string = $poll['title'];
                            $firstChar = $string[0];
                            echo($firstChar);
                        ?>
                    </span>
                </th>
                <td><?=$poll['title']?></td>
				<td><?=$poll['answers']?></td>
                <td class="actions">
					<a href="vote.php?id=<?=$poll['id']?>" class="btn btn-outline-dark" title="Cast Vote"><i class="fas fa-vote-yea fa-xs"></i></a>
					<a href="vote.php?id=<?=$poll['id']?>" class="btn btn-dark" title="View Results"><i class="fas fa-chart-bar fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
            
        </section>
        
    </div>

<?php include("includes/footer.php"); ?>
