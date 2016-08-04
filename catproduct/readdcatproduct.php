<?php

if(isset($_POST['btnnhap'])){
try{
include_once('../ketnoi.php');

$name=$_POST['txtname'];
$content=$_POST['txtcontent'];

$sql="insert into catproducts (name,content)";
$sql=$sql." values ('$name','$content')";

$db->exec($sql);
}
catch (Exception $e)
{
//xy ly loi
 echo $e->getMessage();
}
echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
header("Location:catproduct.php");



}

?>