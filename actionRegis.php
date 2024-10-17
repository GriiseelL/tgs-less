<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "web1";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $inputEmail = $_POST["email"];
  $inputUsername = $_POST["username"];
  $inputPassword = $_POST["password"];

  $sql = "INSERT INTO users (email, username, password)
  VALUES ('$inputEmail', '$inputUsername', '$inputPassword')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header ("Location: web.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


echo $inputEmail;
echo $inputUsername;
echo $inputPassword;