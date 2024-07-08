<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "loan_db";

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['applicationNumber'])){
    $id = $_POST['applicationNumber'];
    $sql1 = "UPDATE application SET directorStatus='Approved' WHERE id=$id";
    $sql2 = "UPDATE directordb SET statusDr='Approved' WHERE directordb.applicationNumber=$id";
    

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo "Application approved successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
