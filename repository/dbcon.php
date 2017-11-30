<?php

function db_connect()
{
    $serverName = "localhost";
    $username = "root";
    $password = "madh";

// Create connection
    $conn = new mysqli($serverName, $username, $password);

//selecting relevant schema
    $db = mysqli_select_db($conn, "2017cs");

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>