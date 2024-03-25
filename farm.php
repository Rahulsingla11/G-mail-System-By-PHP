<?php
include "db.php";


$sql = "SELECT * FROM str ORDER BY id DESC LIMIT 1";

$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $otp=$_POST['otp'];
        $latestId = $row['otp'];
        if($otp==$latestId){
            echo "login sucessfully";
        }
        else{
            echo "worng otp";
        }
    } 
}

mysqli_close($con);
?>
