<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=biscuit", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        // echo "\n";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        echo "\n";
    }


?>