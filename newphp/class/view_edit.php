

<!DOCTYPE html>
<html>

    <head>
        <meta charsetUTF-8">    <meta name="port" content="=device-width initial-scale=.0">
        <title>View Products</title>    <link rel="stylesheet"="sty.css">
    </head>
    <body>

        <div class="products-cards">
        <h1>View Products</h1>
        <?php
            include "data.php";

            $sql = "SELECT * FROM `products`;";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="product-card">
                <form method="POST" action="edit.php">
                    <img src="<?php echo $row["image"]; ?>"  alt="Product Image">
                    <h2><?php echo htmlspecialchars($row["name"]); ?></h2>
                    <p><?php echo htmlspecialchars($row["dicreption"]); ?></p>
                    <p><?php echo htmlspecialchars($row["price"]); ?></p>

                    <input type="hidden" name="names" value="<?php echo htmlspecialchars($row["name"]); ?>">
                    <button type="submit" style="background-color:Red;">DELETE</button>
                </form>
            </div>
        <?php
            }
        ?>
    </div>

    </body>
</html>