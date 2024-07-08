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

    //  INSERT INTO ... SELECT query to transfer data from application to presidentdb
    $sql_transfer = "INSERT INTO presidentdb (applicationNumber, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, StatusPr)
                     SELECT applicationNumber, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, StatusDr 
                     FROM directortb WHERE id = ?";

    $stmt = $conn->prepare($sql_transfer);
    $stmt->bind_param("i", $id);
    $stmt->execute();


    if ($stmt->affected_rows > 0) {
        echo json_encode(["status" => "success", "message" => "Data transferred successfully to Director."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send data."]);
    }
} 


$conn->close();
?>
