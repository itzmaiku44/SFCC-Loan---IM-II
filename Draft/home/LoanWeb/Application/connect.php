<?php

$host= "localhost";
$user= "root";
$password= "";
$db = "loan_db";

$data = mysqli_connect($host, $user, $password, $db);
/* if($data===false)
{
    die("Connection cannot establish.");
} */

if ($data->connect_error) {
    die("Connection failed: " . $data->connect_error);
}
        

?>