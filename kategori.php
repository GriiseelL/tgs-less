<?php

session_start();
if (!isset($_SESSION['user'])) {
        header("Location: web.php"); // Redirect to your login page
        exit();
    }

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
    <link rel="stylesheet" href="kategori.css">
</head>
<body>
    <div class="sidebar">
        <h2 class="kata">Web</h2>
        <div><a href="product.php">Product</div></a>
        <div> <a href="kategori.php">category</a></div>
    </div>
   <br> <a href="addKategori.php"><button style="margin-left: 190px">add</button></a>
<div class="table-container">
    <br><table border="1" class="tabel">
    <tr>
        <td>No</td>
        <td>kategori</td>
        <td>action</td>
    </tr>

<?php 
while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["category_id"]. " - Name: " . $row["category_name"]."<br>";

    $kategori= $row["category_id"] 
?>

    <tr>
        <td><?php echo $row["category_id"] ?></td>
        <td><?php echo $row["category_name"]?></td>
        <td>
          <a href="editKategori.php?id_category=<?php echo $kategori?>">Edit</a>
        <a href="actionDelete.php?id_category=<?php echo $kategori?> " onclick="return confirm('Are you sure?')">Delete</a>
      </td>
    </tr>
<?php
}
?>
</table>
</div>
</body>
</html>