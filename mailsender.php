<?php
include "db.php";
$to =$_POST['email'];
$txt =rand(10000, 99999);
$subject ="Email verification code : $txt";
$headers ="Email verification by Shield";
mail($to,$subject,$txt,$headers);
$sql = "INSERT INTO str (otp) VALUES('$txt')";
$result = $con->query($sql);
header("location:verfication.php");
?>  