<?php
$kategori = $_POST["kategori"];

$servername="localhost";
$username="root";
$password="";
$database="web1";
$conn = new mysqli($servername, $username, $password, $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $id_category = $_GET["category_id"];

//   echo $id_category;
//   echo $kategori;
  $sql = $conn->query("UPDATE categories SET category_name = '$kategori' WHERE category_id = '$id_category'");

  
  if ($sql === TRUE) {
    echo "New record created successfully";
    header ("Location: kategori.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


// echo $id_category;
