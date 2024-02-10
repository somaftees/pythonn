<?php

include "data.php";
$name = $_POST["names"];
$email = $_POST["email"];
$pass = $_POST["passwords"];
$sql = "SELECT* FROM userinfo WHERE name='$name' AND email='$email' AND password='$pass'";
$excec = mysqli_query($con,$sql);

$number = mysqli_num_rows($excec);
if($number==1){
    header("Location: dash.php");
}
else{
    echo "Wrong Data";
}

?>