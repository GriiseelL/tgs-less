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

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="web1";
    $conn = new mysqli($servername, $username, $password, $database );

    $product_id = $_GET["id_product"];
    
    $q = $conn->query("SELECT * FROM product WHERE product_id='$product_id'");
    foreach ($q as $dt) {
        ?>
    <form action="actionEditProduct.php?product_id=<?php echo $product_id?>" method="post">
        <a style="margin-left: 190px;">Name product</a>
        <input type="text" placeholder="edit product" name="product" value="<?php echo $dt ['product_name']?>">
        <input type="submit" value="edit">
    </form>
    <?php
    }
    ?>
</body>
</html>