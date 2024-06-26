<?php

if(isset($_GET["id"]))
{
    $id = $_GET["id"];

    $host= "localhost";
    $user= "root";
    $password= "";
    $db = "goldendb";

    $connect = new mysqli($host, $user, $password, $db);

    $sql = "DELETE FROM clients WHERE id=$id";
    $connect->query($sql);
}

header("location:../index.php");
exit;

?>