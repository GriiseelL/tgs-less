<?php
    
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: web.php"); // Redirect to your login page
        exit();
    }
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
  <!-- body content -->
    </div>
<div class="table-container">
    <table border="1" class="tabel">
    <tr>
        <td>No</td>
        <td>Nama produk</td>
        <td>kategori</td>
    </tr>

<?php
   for($loop = 1; $loop <= 100; $loop++) {
    // echo "<tr>";
    // echo "<td>$loop</td>";
    // echo "<td>Sabun</td>";
    // echo "<td>Alat mandi</td>";
    // echo "</tr>";
?>
    <tr>
        <td> <?php echo $loop?></td>
        <td>Sabun</td>
        <td>Alat mandi</td>
    </tr>
<?php
   }
?>
</table>
</div>
</body>
</html>