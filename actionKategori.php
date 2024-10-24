<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "web1";
// Create connection
$conn = new mysqli($servername, $username, $password, $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $inputKategori = $_POST["kategori"];

  $sql = "INSERT INTO categories (kategori)
  VALUES ('$inputKategori')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header ("Location: kategori.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


echo $inputKategori;
