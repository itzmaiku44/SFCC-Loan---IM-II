<?php

$host= "localhost";
$user= "root";
$password= "";
$db = "loan_db";

$data = mysqli_connect($host, $user, $password, $db);
if($data===false)
{
    die("Connection cannot establish.");
}
        

?>