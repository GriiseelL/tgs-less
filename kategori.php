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
        <div> <a href="kategori.php">category></a></div
  <!-- body content -->
    </div>
<div class="table-container">
    <table border="1" class="tabel">
    <tr>
        <td>No</td>
        <td>kategori</td>
    </tr>

<?php 
for($loop = 1; $loop <= 100; $loop++) {

?>

    <tr>
        <td><?php echo $loop ?></td>
        <td>Alat mandi</td>
    </tr>
<?php
}
?>
</table>
</div>
</body>
</html>