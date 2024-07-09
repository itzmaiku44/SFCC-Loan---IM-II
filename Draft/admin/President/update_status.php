<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

if(isset($_POST['id'])){
    $id = $_POST['id'];
 
    $sql1 = "UPDATE application SET presidentStatus='Approved' WHERE id=$id";
    $sql2 = "UPDATE presidentdb SET statusPr='Approved' WHERE applicationNumber=$id";

    /* if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Application approved successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error updating record: " . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request parameters"]);
} */

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    // Move data to Approved table
    $sql_transfer = "INSERT INTO approvedsPr (SELECT * FROM presidentdb WHERE applicationNumber=$id)";
    if ($conn->query($sql_transfer) === TRUE) {
        // Delete data from original table
        $sql_delete = "DELETE FROM presidentdb WHERE applicationNumber=$id";
        if ($conn->query($sql_delete) === TRUE) {
            echo json_encode(["status" => "success", "message" => "Application approved and moved successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error deleting record: " . $conn->error]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Error transferring record: " . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Error updating record: " . $conn->error]);
}
} else {
echo json_encode(["status" => "error", "message" => "Invalid request parameters"]);
}

$conn->close();
?>