<?php
include "data.php";



if (isset($_POST["title"]) && isset($_POST["desc"]) && isset($_POST["price"]))
{
    $t = $_POST["title"];
    $d = $_POST["desc"];
    $p = $_POST["price"];

    $i = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$i);
    $image = "img/".$i;

    $sql = "INSERT INTO `products` ( `name`, `dicreption`, `image`, `price`) VALUES ('$t', '$d', '$image', '$p');";

    mysqli_query($con,$sql);
    header("Location: next.php");
}


?>