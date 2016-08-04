<?php
include_once('../ketnoi.php');

if (isset( $_GET['id'])){
 $ma=$_GET['id'];
 $sql="DELETE FROM `catproducts` WHERE `catproducts`.`id` = $ma";
 //echo $sql;
 $db->exec($sql);
header("Location:catproduct.php");

}
?>