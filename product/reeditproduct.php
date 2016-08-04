<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){

echo $ma=$_POST['idcat'];
echo $name=$_POST['txtname'];
echo $content=$_POST['txtcontent'];
echo $price=$_POST['txtprice'];
echo $catproid=$_POST['catproid'];
$sql="UPDATE `products` SET `name` = '$name',`content` = '$content',`price` = '$price',`catproducts_id` = '$catproid' WHERE `products`.`id` = $ma";
//echo $sql;
$db->exec($sql);
header("Location:product.php");





}


?>