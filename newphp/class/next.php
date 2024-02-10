<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>
<form class="form" method="POST" action="insert.php" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="title" required>
    <label for="email">description:</label>
    <input type="text" id="desc" name="desc" required>

    <label for="price">price:</label>
    <input type="text"  name="price" required>
    
    <input type="file" name="image" required>
    <button type="submit">Submit</button>
</form>


<div class="products-cards">
  <h1>View Products</h1>
    <?php

    include "data.php";
    $sql = "SELECT * FROM `products`;";
    $excecuted = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($excecuted)) { ?>


    <div class="product-card">
        <img src=" <?php echo $row["image"] ?>" alt="Product 1">
        <h2><?php echo $row["name"] ?></h2>
        <p><?php echo $row["dicreption"] ?></p>
        <p><?php echo $row["price"] ?></p>
    </div>
  
</div>

<?php

}


?>
    
</body>
</html>






