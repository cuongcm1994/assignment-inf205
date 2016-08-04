<?php

if(isset($_POST['btnnhap'])){
try{
include_once('../ketnoi.php');

$name=$_POST['txtname'];
$email=$_POST['txtemail'];
$phone=$_POST['txtphone'];
$address=$_POST['txtaddress'];

$sql="insert into custommers (name,email,phone,address)";
$sql=$sql." values ('$name','$email','$phone','$address')";

$db->exec($sql);
}
catch (Exception $e)
{
//xy ly loi
 echo $e->getMessage();
}
echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
header("Location:custommer.php");



}

?>