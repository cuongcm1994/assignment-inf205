<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){

echo $ma=$_POST['idcat'];
echo $name=$_POST['txtname'];
echo $content=$_POST['txtcontent'];
$sql="UPDATE `catproducts` SET `name` = '$name',`content` = '$content' WHERE `catproducts`.`id` = $ma";
//echo $sql;
$db->exec($sql);
header("Location:catproduct.php");





}


?>