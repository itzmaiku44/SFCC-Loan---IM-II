<?php

$host= "localhost";
$user= "root";
$password= "";
$db = "loan_db";


// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql_delete = "DELETE FROM application WHERE id = ?";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bind_param("i", $id);
    $stmt_delete->execute();
    echo json_encode(["status" => "success", "message" => "Data has been successfully deleted and moved to recycle bin."]);
    $stmt_delete->close();
} else {
    echo json_encode(["status" => "error", "message" => "Failed to transfer data."]);
}



$conn->close();



?>
