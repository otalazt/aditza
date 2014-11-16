<?php
include("inc/db.php");
include('inc/array.php');
include('inc/debug.php');
include('inc/funtzioak.php');
include('inc/baldintzak.inc.php');
/*Sql */
$sqldelete = "DELETE FROM `".$basea."` 	where `Giltza`='".$Giltza."'";
mysql_query($sqldelete);

?>
