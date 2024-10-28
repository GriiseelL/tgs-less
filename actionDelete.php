<?php
$_GET["id_category"];

$servername="localhost";
$username="root";
$password="";
$database="web1";
$conn = new mysqli($servername, $username, $password, $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $id_category = $_GET["id_category"];

  $sql = "DELETE FROM categories WHERE category_id='$id_category'";

  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header ("Location: kategori.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


// echo $id_category;
