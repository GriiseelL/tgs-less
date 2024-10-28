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

    $category_id = $_GET["id_category"];
    
    $q = $conn->query("SELECT * FROM categories WHERE category_id='$category_id'");
    foreach ($q as $dt) {
        ?>
    <form action="actionEdit.php?category_id=<?php echo $category_id?>" method="post">
        <a style="margin-left: 190px;">Name kategori</a>
        <input type="text" placeholder="edit kategori" name="kategori" value="<?php echo $dt ['category_name']?>">
        <input type="submit" value="edit">
    </form>
    <?php
    }
    ?>
</body>
</html>