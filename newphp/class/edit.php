<?php
include "data.php";


    $names = $_POST["names"];

    $sql = "DELETE FROM `products` WHERE name='$names'";

    mysqli_query($con,$sql);
    header("Location: view_edit.php");

?>
