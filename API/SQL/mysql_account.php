<?php

$servername = "localhost";
$username = "web27545248";
$password = "Nicki100";

try {
    $conn = new PDO("mysql:host=$servername;dbname=usr_web27545248_3", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    //echo "Connection failed: " . $e->getMessage();
}

?>