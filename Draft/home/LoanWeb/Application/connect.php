<?php

$host= "localhost";
$user= "root";
$password= "";
$db = "loan_db";

$conn = mysqli_connect($host, $user, $password, $db);
/* if($data===false)
{
    die("Connection cannot establish.");
} */

if ($conn->connect_error) {
    die("Connection failed: " . $data->connect_error);
}
        

?>