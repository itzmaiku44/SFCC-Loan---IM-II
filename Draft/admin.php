<?php

    session_start();
    if(isset($_SESSION["username"])){
        header("Location: index.php");
        exit();
    }

$host= "localhost";
$user= "root";
$password= "";
$db = "loan_db";

mysqli_report(MYSQLI_REPORT_STRICT);
$errorMessage = "";
$username = "";
$password = "";

$data = mysqli_connect($host, $user, $password, $db);
if($data===false)
{
    die("Connection cannot establish.");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $data->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row && $row['password'] == $password) {
        $_SESSION['user_id'] = $row['adminid'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['positn'] = $row['position'];

        switch ($row['position']) {
            case 'Collector':
                header("Location: admin_dashboard.php");
                break;
            case 'Director':
                header("Location: manager_dashboard.php");
                break;
            case 'President':
                header("Location: employee_dashboard.php");
                break;
            default:
                // Handle other positions or redirect to a generic page
                header("Location: index.php");
                break;
        }
    } else {
            $errorMessage = "Invalid Login.";
        }
} /* else {
        $errorMessage = "Error executing query: ".$data->error;
    } */



    /* $result = mysqli_query($data, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result); // check if null or not
        if($row && $row["username"] === $username && $row["password"] === $password)
        {
            $_SESSION["username"] = $username;
            $_SESSION["position"] = $row["position"];
            header("location:index.php");
            exit; // stop script execution after redirecting
 */


    // if($row["logintype"]==="admin")
    // {
    //     $_SESSION["username"]=$username;
    //     header("location:index.php");
    // }
    // elseif($row["logintype"]==="user")
    // {
    //     $_SESSION["username"]=$username;
    //     header("location:index.php");
    // }
    // else
    // {
    //     $errorMessage = "Invalid Login. " . $data->error;
    // }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="source/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="login-form">
                    <h2 class="text-center">Login</h2>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <?php
                            if(!empty($errorMessage))
                             {
                                echo "
                                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                    <strong>$errorMessage</strong>
                                    <button type'button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                                ";
                            }

                        ?>
                        <button type="submit" class="btn btn-primary btn-block viewBtn" data-id=" . $row['id'] . ">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="src/adminQuery.js"></script>
</body>


</html>
