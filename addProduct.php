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
  $sq = "SELECT*FROM color";
$result = $conn->query($sql);
$res = $conn->query($sq);
  
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
    <form action="actionProduct.php" method="post">
        <a style="margin-left: 190px;">Name product</a>
        <input type="text" placeholder="tambahkan product" name="product">
        <input type="submit" value="add">
        <select name="dropdown" id="">
        <?php 
    while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["category_id"]. " - Name: " . $row["category_name"]."<br>";

?>
            <option value="<?php echo $row["category_id"]?>"><?php echo $row["category_name"]?></option>
<?php } ?> 
</select>
        <select name="dropdown" id="">
        <?php 
    while($row = $res->fetch_assoc()) {
    // echo "id: " . $row["category_id"]. " - Name: " . $row["category_name"]."<br>";
?>
      <option value="<?php echo $row["color_id"]?>"><?php echo $row["color_name"]?></option>
<?php } ?>
    </select>
    </form>
</body>
</html>