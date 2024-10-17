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

  $sql = "SELECT*FROM categories";
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
        <div><a href="product.php">Product</div></a>
        <div> <a href="kategori.php">category></a></div>
    </div>
<div class="table-container">
    <table border="1" class="tabel">
    <tr>
        <td>No</td>
        <td>kategori</td>
    </tr>

<?php 
while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["category_id"]. " - Name: " . $row["category_name"]."<br>";
?>

    <tr>
        <td><?php echo $row["category_id"] ?></td>
        <td><?php echo $row["category_name"]?></td>
    </tr>
<?php
}
?>
</table>
</div>
</body>
</html>