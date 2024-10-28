<?php
$product= $_POST["product"];

$servername="localhost";
$username="root";
$password="";
$database="web1";
$conn = new mysqli($servername, $username, $password, $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $id_product = $_GET["product_id"];

//   echo $id_category;
//   echo $kategori;
  $sql = $conn->query("UPDATE product SET product_name = '$product' WHERE product_id = '$id_product'");

  
  if ($sql === TRUE) {
    echo "New record created successfully";
    header ("Location: product.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


// echo $id_category;
