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

    //  INSERT INTO ... SELECT query to transfer data from application to approvaldb
    $sql_transfer = "INSERT INTO approvaldb (applicationNumber, fname, lname, age, bmonth, bday, byear, phonenum, email, loanAmount, term, fundPurpose, applyDate, StatusDr)
                     SELECT id, fname, lname, age, bmonth, bday, byear, phonenum, email, loanAmount, term, fundPurpose, applyDate, directorStatus 
                     FROM application WHERE id = ?";

    $stmt = $conn->prepare($sql_transfer);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(["status" => "success", "message" => "Data transferred successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to transfer data."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "ID not provided."]);
}

$conn->close();

$conn->close();
?>
