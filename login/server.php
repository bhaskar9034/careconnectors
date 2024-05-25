<?php

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

$host = 'localhost'; // Change this to your actual MySQL server hostname or IP address
$username = 'root'; // Change this to your MySQL username
$password = ''; // Change this to your MySQL password
$dbname = 'sih'; // Change this to the name of your database

$connection = mysqli_connect($host, $username, $password, $dbname);

if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "please enter your Username");
  }
  if (empty($password)) {
  	array_push($errors, "please enter your Password");
  }
  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM hospitals WHERE username='$username' AND password='$password'";
    $results = mysqli_query($connection, $query);

    if (mysqli_num_rows($results) == 1) {
        // User exists in 'hospitals' table
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Please Logout and Login Again";

        // Redirect based on username
        if ($username == 'varma') {
            header('location: varmaindex.php');
        } elseif ($username == 'bhimavaram') {
            header('location: bvrmindex.php');
        } elseif ($username == 'imperial') {
          header('location: imperialindex.php');
      }elseif ($username == 'sadhana') {
        header('location: sadhanaindex.php');
    }else {
            // Default redirection if username doesn't match known cases
            header('location: defaultindex.php');
        }
    } else {
        array_push($errors, "Wrong username/password combination");
    }
}
}

if (count($errors) > 0) {
    echo '<div style="background-color: #ff9999; padding: 10px;     top: 0;
    left: 0;    position: absolute;
    top: 0;
    left: 0;
    background-color: #ff9999;
    padding: 10px;
    text-align: center;
    width: 100%; /* Makes the element span the full width of its containing element */
    z-index: 1; /* Ensures the eleme">';
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    echo '</div>';
}
?>
