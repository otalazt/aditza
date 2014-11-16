<?php
include("../inc/db.php");
include('../inc/array.php');
include('../inc/debug.php');
include('../inc/funtzioak.php');
include('../inc/baldintzak.inc.php');

// galdera pettoekin baina desberdina
mysql_query("SET NAMES 'utf8_spanish_ci'");
$galderaBilaketa = "select Giltza, Euskalkia, Aditza, Modua, Aldia, Forma, Nor, Nori, Nork, Eztabada, Toka , Noka, Xuka, Zuka from ".$basea."";
$sqlBilaketa= mysql_query($galderaBilaketa) OR die('requête BilaketaG txarra');
while($row=mysql_fetch_array($sqlBilaketa)){
	$Giltza=$row['Giltza'];
	$Euskalkia=$row['Euskalkia'];
	$Aditza=$row['Aditza'];
	$Modua=$row['Modua'];
	$Aldia=$row['Aldia'];
	$Forma=$row['Forma'];
	$Nor=$row['Nor'];
	$Nori=$row['Nori'];
	$Nork=$row['Nork'];
	$Eztabada=$row['Eztabada'];
	$Toka=$row['Toka'];
	$Noka=$row['Noka'];
	$Xuka=$row['Xuka'];
	$Zuka=$row['Zuka'];
	
$sqlupdate = "update ".$basea." set 
	Euskalkia='$Euskalkia',
	Aditza='$Aditza',
	Modua='$Modua',
	Aldia='$Aldia',
	Forma='$Forma',
	Nor='$Nor',
	Nori='$Nori',
	Nork='$Nork',
	Eztabada='$Eztabada',
	Toka='$Toka',
	Noka='$Noka',
	Xuka='$Xuka',
	Zuka='$Zuka',
	En='".en($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Ena='".ena($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Enik='".enik($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Enean='".enean($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Ela='".ela($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Elarik='".elarik($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Elako='".elako($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Elakotz='".elakotz($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Elakoan='".elakoan($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Ba='".ba($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaToka='".ba($Toka,$Modua,$Aldia,$Euskalkia)."',
	BaNoka='".ba($Noka,$Modua,$Aldia,$Euskalkia)."',
	BaEn='".baEn($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaEna='".baEna($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaEnik='".baEnik($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaEnean='".baEnean($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaEla='".baEla($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaElarik='".baElarik($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaElako='".baElako($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaElakotz='".baElakotz($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaElakoan='".baElakoan($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	Bait='".bait($Eztabada,$Modua,$Aldia,$Euskalkia)."',
	BaitToka='".bait($Toka,$Modua,$Aldia,$Euskalkia)."',
	BaitNoka='".bait($Noka,$Modua,$Aldia,$Euskalkia)."'
	where Giltza='$Giltza'";

mysql_query($sqlupdate);
}
echo "menderatua.";
?>
