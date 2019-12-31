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

    // MySQL query that selects all the posts and guild candidates
    $stmt = $pdo->query('SELECT p.*, GROUP_CONCAT(pa.title ORDER BY pa.id) AS answers FROM polls p LEFT JOIN poll_answers pa ON pa.poll_id = p.id GROUP BY p.id');
    $polls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("includes/header.php"); ?>

    <!-- Main Body  -->
    <div class="main-body">
        <div class="voters-container mt-5 pt-5 pb-5">
            <div class="table-container shadow pt-5 pl-5 pr-5 pb-5">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Guild Posts</th>
                        <th scope="col">Candidates</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($polls as $poll): ?>
                        <tr>
                            <td><?=$poll['id']?></td>
                               <td><?=$poll['posts']?></td>
                            <td><?=$poll['candidates']?></td>
                            <td>
                                <a href="vote.php?id=<?=$poll['id']?>" class="view" title="View Poll"><i class="fas fa-eye fa-xs"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>
