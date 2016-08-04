<?php
include_once('../ketnoi.php');

if (isset( $_GET['id'])){
 $ma=$_GET['id'];
 $sql="DELETE FROM `orderdetails` WHERE `orderdetails`.`id` = $ma";
 //echo $sql;
 $db->exec($sql);
header("Location:orderdetail.php");

}
?>