<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $port = "3306";
 
    // Create connection
    $conn = mysqli_connect("$servername:$port", $username, $password);
 
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "<p>Connected successfully</p>";
 
    // Create database
    $sql = "CREATE DATABASE myDB";
 
    if (mysqli_query($conn, $sql)) {
      echo "<p>Database created successfully</p>";
    } else {
      echo "Error creating database: " . mysqli_error($conn);
    }
?>