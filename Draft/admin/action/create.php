<?php
$host= "localhost";
$user= "root";
$password= "";
$db = "goldendb";

$connect = new mysqli($host, $user, $password, $db);

$lname = "";
$fname = "";
$email = "";
$mnum = "";
$message = "";
$errorMessage = "";
$successMessage = "";

mysqli_report(MYSQLI_REPORT_STRICT); // Error catch excemption. It remove all the warnings echoed in top part of page

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $mnum = $_POST["mnum"];
    $message = $_POST["message"];

    do{
        if(empty($lname) || empty($fname) || empty($email) || empty($mnum) || empty($message))
        {
            $errorMessage = "All fields are required";
            break;
        }
        //add new to database
        $sql = "INSERT INTO `clients` (`lname`, `fname`, `email`, `mnum`, `message`) VALUES ('$lname', '$fname', '$email', '$mnum', '$message')";
        $result = $connect->query($sql);

        if(!$result)
        {
            $errorMessage = "Error: Invalid query. " . $connect->error;
            break;
        }

        $lname = "";
        $fname = "";
        $email = "";
        $mnum = "";
        $message = "";

        $successMessage = "Client added Sucessfully";
        header("location:../index.php");
        exit;

    }while(false);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="src/style.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h2 class="txt mb-5 text-center" >New Client</h2>

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
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-end"><b>Last Name: </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-end"><b>First Name: </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-end"><b>Email: </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-end"><b>Mobile Number: </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="mnum" value="<?php echo $mnum; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-end"><b>Message: </b></label>
                <div class="col-sm-6">
                    <textarea name="message" class="form-control" name="message" value="<?php echo $message; ?>"></textarea>
                </div>
            </div>
            <?php
                if(!empty($successMessage))
                {
                    echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type'button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
                }


            ?>


            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="../index.php" role="button">Cancel</a>
                </div>

            </div>
        </form>
    </div>

</body>
</html>