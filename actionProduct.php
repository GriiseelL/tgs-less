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

  $inputProduct = $_POST["product"];

  $sql = "INSERT INTO product (product_name)
  VALUES ('$inputProduct')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header ("Location: product.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


echo $inputKategori;
