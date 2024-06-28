<?php
session_start();

require_once 'config.php'; 

$fName = $lName = $email = $password = '';
$errors = array();

if (isset($_POST['signUp'])) {
   
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email already exists
    $check_query = "SELECT * FROM users_form WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // If user exists
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Register user if no errors
    if (count($errors) == 0) {
        $query = "INSERT INTO users_form (name, email, password, role) VALUES ('$fName $lName', '$email', '$password', 'user')";
        mysqli_query($conn, $query);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: userlogin.php'); 
    }
}
?>