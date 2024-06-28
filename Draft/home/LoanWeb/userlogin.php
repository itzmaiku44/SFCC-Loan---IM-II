<?php
session_start();


require_once 'config.php'; 


$email = $password = '';
$errors = array();


if (isset($_POST['signIn'])) {
   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    $query = "SELECT * FROM users_form WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);


    if ($user && $password == $user['password']) { 
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: home.php'); 
        exit(); 
    } else {
        array_push($errors, "Wrong email/password combination");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/loginform.css">
</head>

<body>
    <header>
        <h2 class="headTitle">SFCC LOANS</h2>
        <nav>
        </nav>
    </header>

    <section class="sec1">
        <div class="container" id="signup" style="display: none;">
            <h1 class="form-title">Create Account</h1>
            <form method="post" action="userregister.php">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <label for="fname">First Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                    <label for="lName">Last Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>

            <div class="links">
                <p>Already Have Account ?</p>
                <button id="signInButton">Sign In</button>
            </div>
        </div>

        <div class="container" id="signIn">
            <h1 class="form-title">Welcome!</h1>
            <p class="subtitle">Sign in to your account</p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <label for=""> Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required />
                    <label for=""> Password</label>
                </div>
                <p class="recover">
                    <a href="#">Forgot Password?</a>
                </p>
                <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>

            <div class="links">
                <p>Don't have account yet?</p>
                <button id="signUpButton">Sign Up</button>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>