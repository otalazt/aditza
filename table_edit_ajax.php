<?php
include("inc/db.php");
include('inc/array.php');

if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
foreach($baldintzak as $baldintza){
		$$baldintza = mysql_escape_String($_POST["$baldintza"]);
	}
/*Eztabada eta Toka segurtatu */
if(empty($Eztabada)){$Eztabada="";} else {$Eztabada=trim($Eztabada);}
if(empty($Toka)){$Toka="";} else {$Toka=trim($Toka);}
if(empty($Noka)){$Noka="";} else {$Noka=trim($Noka);}
if(empty($Xuka)){$Xuka="";} else {$Xuka=trim($Xuka);}
if(empty($Zuka)){$Zuka="";} else {$Zuka=trim($Zuka);}

$sqlupdate = "update ".$basea." set 
	Euskalkia='$Euskalkia',
	Aditza='$Aditza',
	Modua='$Modua',
	Forma='$Forma',
	Nor='$Nor',
	Nori='$Nori',
	Nork='$Nork',
	Eztabada='$Eztabada',
	Toka='$Toka',
	Noka='$Noka',
	Xuka='$Xuka',
	Zuka='$Zuka',
	En='$En',
	Ena='$Ena',
	Enik='$Enik',
	Enean='$Enean',
	Ela='$Ela',
	Elarik='$Elarik',
	Elako='$Elako',
	Elakotz='$Elakotz',
	Elakoan='$Elakoan',
	Ba='$Ba',
	BaToka='$BaToka',
	BaNoka='$BaNoka',
	BaEn='$BaEn',
	BaEna='$BaEna',
	BaEnik='$BaEnik',
	BaEnean='$BaEnean',
	BaEla='$BaEla',
	BaElarik='$BaElarik',
	BaElako='$BaElako',
	BaElakotz='$BaElakotz',
	BaElakoan='$BaElakoan',
	Bait='$Bait',
	BaitToka='$BaitToka',
	BaitNoka='$BaitNoka'
	where Giltza='$id'";


mysql_query($sqlupdate);
}
?>
