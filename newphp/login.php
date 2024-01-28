<?php

include "db.php";
$email = $_POST["em"];
$pass = $_POST["pass"];
$sql = "SELECT * FROM  users WHERE email ='$email' AND password = '$pass'";

$result = mysqli_guery($conn,$sql);
$num = mysqli_num_rows($result);

if ($num ==1) {
    header ("Location : dashb.php");
    
}
else{
    echo "bye";

}
?>
