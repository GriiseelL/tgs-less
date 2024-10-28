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
    </form>
</body>
</html>