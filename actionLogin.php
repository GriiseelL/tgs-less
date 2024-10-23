<?php

session_start();

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
  $inputPassword = $_POST["password"];

  $sql = "SELECT*FROM users WHERE email='$inputEmail'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    if ($inputEmail==$row['email']) {
        if ($inputPassword==$row['password']) {
            $_SESSION["user"] = $row;
            header ("Location: product.php");
        }
    
        else {
            // echo "password salah";
                echo "<script type='text/javascript'>
                alert('Password salah');
                window.location.href='web.php';
                </script>";
                // header ("Location: web.php");
        }
    }
    
    else {
        // echo "input salah";
            echo "<script type='text/javascript'>
            alert('input salah');
             window.location.href='web.php';
            </script>";
    }
    
  } else {
    echo "<script type='text/javascript'>
    alert('akun tidak tersedia');
     window.location.href='web.php';
    </script>";
  }
  $conn->close();
//   return;
  

// $email = "grizelda@gmail.com";
// $password = "020608";


// echo $email;