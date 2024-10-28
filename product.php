<?php
    
    session_start();
    // session_unset();
    // session_destroy();
    // var_dump($_SESSION);
    // return;
    if (!isset($_SESSION['user'])) {
        header("Location: web.php"); // Redirect to your login page
        exit();
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "web1";
    
    $conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT*FROM product";
$result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
  } else {
    echo "0 results";
  }
  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="produk.css">
</head>
<body>
    <div class="sidebar">
        <h2 class="kata">Web</h2>
        <div><a href="product.php">Product</a></div>
        <div> <a href="kategori.php">category</a></div>
        <div> <a href="action-logout.php">logout</a></div>
  <!-- body content -->
    </div>
    <br> <a href="addProduct.php"><button style="margin-left: 190px; margin-bottom: 20px">add</button></a> <br>
<div class="table-container">
    <table border="1" class="tabel">
    <tr>
        <td>No</td>
        <td>Nama produk</td>
        <!-- <td>kategori</td> -->
    </tr>

<?php
while ($row = $result->fetch_assoc()) {
  $product= $row["product_id"] 
?>
    <tr>
        <td> <?php echo $row["product_id"]?></td>
        <td> <?php echo $row["product_name"]?></td>
        <td>
        <a href="editProduct.php?id_product=<?php echo $product?>">Edit</a>
        <a href="actionDeleteProduct.php?id_product=<?php echo $product?> " onclick="return confirm('Are you sure?')">Delete</a>
      </td>
        <!-- <td>Sabun</td> -->
        <!-- <td>Alat mandi</td> -->
    </tr>
<?php
}
?>
</table>
</div>
</body>
</html>