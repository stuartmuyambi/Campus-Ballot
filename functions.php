<?php
session_start();

// connect to database
$db = mysqli_connect('localhost','stuartmuyambi','msj3p36n','campus_ballot');

// variable declaration
$username = "";
$email = "";
$errors = array();

// call the register() function if register_btn is clicked
if(isset($_POST['register_btn'])) {
    register();
}

// REGISTER USER
function register() {
    
    // call these variables with the global keyword to make them available in function
    global $db, $errors, $username, $email;

    // recieve all input values from the form. Call the e() function
    // defined below to escape form values
    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $password_1 = e($_POST['password_1']);
    $password_2 = e($_POST['password_2']);

    //form validation: ensure that the form is correctly filled
    if (empty($username) || empty($email) || empty($password_1)) {
        array_push($errors, "<div class='errors check'><div class='icon'><i class='fas fa-exclamation-circle'></i></div><div class='error-message'><strong>Empty Field!</strong> Username, Email and Password Required</div></div>");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "<div class='errors check'><div class='icon'><i class='fas fa-exclamation-circle'></i></div><div class='error-message'><strong>Oops!</strong> The two passwords don't match!</div></div>");
    }

// Validate password strength
// $uppercase = preg_match('@[A-Z]@', $password_1);
// $lowercase = preg_match('@[a-z]@', $password_1);
$number    = preg_match('@[0-9]@', $password_1);
// $specialChars = preg_match('@[^\w]@', $password_1);

// if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password_1) < 8)

if(!$number || strlen($password_1) < 5) {
    // Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.
        array_push($errors, "<div class='errors check'><div class='icon'><i class='fas fa-exclamation-circle'></i></div><div class='error-message'><strong>Weak Password!</strong> It should be at least 5 characters and must atleast include one number.</div></div>");
}

// Validate username
if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
        array_push($errors, "<div class='errors check'><div class='icon'><i class='fas fa-exclamation-circle'></i></div><div class='error-message'><strong>Invalid Username!</strong> It can only contain letters and whitespace</div></div>");
}

// Validate Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "<div class='errors check'><div class='icon'><i class='fas fa-exclamation-circle'></i></div><div class='error-message'><strong>Invalid Email!</strong> Enter a valid email format.</div></div>");

}
    //register user if there are no errors in the form
    if(count($errors)==0) {
        $password = md5($password_1); //encrypt the password before saving to database

        if(isset($_POST['user_type'])) {
            $user_type = e($_POST['user_type']);
            $query = "INSERT INTO users (username, email, user_type, password) VALUES('$username','$email','$user_type','$password')";

            mysqli_query($db, $query);
            $_SESSION['success'] = "New user successfully created!!";
            header('location:home.php');
        }else{
            $query = "INSERT INTO users (username, email, user_type, password) VALUES('$username','$email','user','$password')";
            mysqli_query($db, $query);

            //get id of the created user
            $logged_in_user_id = mysqli_insert_id($db);

            $_SESSION['user'] = getUserById($logged_in_user_id);  //put logged in user in session
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }

}

// return user array from their id
function getUserById($id) {
    global $db;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

//escape string
function e($val) {
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if(count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}

function isLoggedIn() {
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
    login();
}

// login user
function login() {
    global $db, $username, $errors;

    // grab form values
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // make sure form is filled properly
    if (empty($username) || empty($password)) {
        array_push($errors, "<div class='errors check'><div class='icon'><i class='fas fa-exclamation-circle'></i></div><div class='error-message'><strong>Empty Field:</strong> Username and Password cannot be empty.</div></div>");
    }

    // attempt login if no errors on form
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {  // user found
            //check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);
            if($logged_in_user['user_type'] == 'admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now Logged in";
                header('location: pages/admin/home.php');
            }else{
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now logged in";

                header('location: index.php');
            }
        }else {
        array_push($errors, "<div class='errors bummer'><div class='icon'><i class='fas fa-times-circle'></i></div><div class='error-message'><strong>Invalid Entry:</strong> Username or Password doesn't match any registered account.</div></div>");
        }
    }

}

function isAdmin() {
    if(isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}
// Function that connects poll to the database
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phppoll';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}

?>