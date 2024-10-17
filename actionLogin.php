<?php
$inputEmail = $_POST["email"];
$inputPassword = $_POST["password"];  

$email = "grizelda@gmail.com";
$password = "020608";

if ($inputEmail==$email) {
    if ($inputPassword==$password) {
        header ("Location: product.php");
    }

    else {
        // echo "password salah";
            echo "<script type='text/javascript'>alert('Password salah');</script>";
    }
}

else {
    // echo "input salah";
        echo "<script type='text/javascript'>alert('input salah');</script>";
}


// echo $email;