<?php

if(isset($_POST['btnnhap'])){
try{
include_once('../ketnoi.php');

$name=$_POST['txtname'];
$content=$_POST['txtcontent'];
$price=$_POST['txtprice'];
$catproid=$_POST['catproid'];

$sql="insert into products (name,content,price,catproducts_id)";
$sql=$sql." values ('$name','$content','$price','$catproid')";

$db->exec($sql);
}
catch (Exception $e)
{
//xy ly loi
 echo $e->getMessage();
}
echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
header("Location:product.php");



}

?>