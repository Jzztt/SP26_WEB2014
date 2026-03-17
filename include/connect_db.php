<?php

function connectDB()
{
    $username = "root";
    $servername = "localhost";
    $password = "";
    $myDB = "web2014.01";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        echo "connect db success";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
