<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){

echo $ma=$_POST['idcat'];
echo $name=$_POST['txtname'];
echo $email=$_POST['txtemail'];
echo $phone=$_POST['txtphone'];
echo $address=$_POST['txtaddress'];
$sql="UPDATE `custommers` SET `name` = '$name',`email` = '$email',`phone` = '$phone',`address` = '$address' WHERE `custommers`.`id` = $ma";
//echo $sql;
$db->exec($sql);
header("Location:custommer.php");





}


?>