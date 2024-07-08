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

    //  query to transfer data from application to directordb
    $sql_transfer_dr = "INSERT INTO directordb (applicationNumber, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, StatusDr)
                     SELECT id, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, directorStatus 
                     FROM application WHERE id = ?";

    $stmt1 = $conn->prepare($sql_transfer_dr);
    $stmt1->bind_param("i", $id);
    $stmt1->execute();



    //  query to transfer data from application to presidentdb
    $sql_transfer_pr = "INSERT INTO presidentdb (applicationNumber, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, StatusPr)
                     SELECT id, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, presidentStatus 
                     FROM application WHERE id = ?";
                     
    $stmt2 = $conn->prepare($sql_transfer_pr);
    $stmt2->bind_param("i", $id);
    $stmt2->execute();

    //  query to transfer data from application to collectordb
    $sql_transfer_cr = "INSERT INTO collectordb (applicationNumber, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, StatusCr)
                     SELECT id, fname, lname, age, bmonth, bday, byear, phonenum, email, street1, street2, city, province, postal, country, loanAmount, term, fundPurpose, applyDate, collector
                     FROM application WHERE id = ?";
                     
    $stmt3 = $conn->prepare($sql_transfer_cr);
    $stmt3->bind_param("i", $id);
    $stmt3->execute();

    if ($stmt1->affected_rows > 0 && $stmt2->affected_rows > 0 && $stmt3->affected_rows > 0) {
        echo json_encode(["status" => "success", "message" => "Data transferred successfully for Executives approval."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to transfer data."]);
    }
} 


$conn->close();
?>
