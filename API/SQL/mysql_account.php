<?php

$servername = "localhost";
$username = "website";
$password = "@49%My5t3ry";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mystery", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>