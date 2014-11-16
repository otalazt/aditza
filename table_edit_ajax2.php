<?php
include("inc/db.php");
include('inc/array.php');
include('inc/debug.php');
include('inc/funtzioak.php');
include('inc/baldintzak.inc.php');
/*Eztabada eta Toka segurtatu */
if(empty($Eztabada)){$Eztabada="";} else {$Eztabada=trim($Eztabada);}
if(empty($Toka)){$Toka="";} else {$Toka=trim($Toka);}
if(empty($Noka)){$Noka="";} else {$Noka=trim($Noka);}
if(empty($Xuka)){$Xuka="";} else {$Xuka=trim($Xuka);}
if(empty($Zuka)){$Zuka="";} else {$Zuka=trim($Zuka);}

/* menderagailuak */
if(($Eztabada!="-") && ($Eztabada!="")){
$En=en($Eztabada,$Modua,$Aldia,$Euskalkia);
$Ela=ela($Eztabada,$Modua,$Aldia,$Euskalkia);
$Ena=ena($Eztabada,$Modua,$Aldia,$Euskalkia);
$Enik=enik($Eztabada,$Modua,$Aldia,$Euskalkia);
$Elarik =elarik($Eztabada,$Modua,$Aldia,$Euskalkia);
$Elakoan=elakoan($Eztabada,$Modua,$Aldia,$Euskalkia);
$Elako=elako($Eztabada,$Modua,$Aldia,$Euskalkia);
$Elakotz=elakotz($Eztabada,$Modua,$Aldia,$Euskalkia);
$Enean=enean($Eztabada,$Modua,$Aldia,$Euskalkia);
$Ba=ba($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaEn=baen($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaEla=baela($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaEna=baena($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaEnik=baenik($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaElarik=baelarik($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaElakoan=baelakoan($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaElako=baelako($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaElakotz=baelakotz($Eztabada,$Modua,$Aldia,$Euskalkia);
$BaEnean=baenean($Eztabada,$Modua,$Aldia,$Euskalkia);
$Bait=bait($Eztabada,$Modua,$Aldia,$Euskalkia);
}
if(($Toka!="-")&&($Toka!="")){
$BaToka=ba($Toka,$Modua,$Aldia,$Euskalkia);
$BaitToka=bait($Toka,$Modua,$Aldia,$Euskalkia);
}
else {$BaToka=$Toka;$BaitToka=$Toka;}
if(($Noka!="-")&&($Noka!="")){
$BaNoka=ba($Noka,$Modua,$Aldia,$Euskalkia);
$BaitNoka=bait($Noka,$Modua,$Aldia,$Euskalkia);
}
else {$BaNoka=$Noka;$BaitNoka=$Noka;}
/* Data*/
$noiz = date('Y-m-d H:i:s');


$sqlupdate = "update `".$basea."` set 
	`Eztabada`='".$Eztabada."',
	`Toka`='".$Toka."',
	`Noka`='".$Noka."',
	`Xuka`='".$Xuka."',
	`Zuka`='".$Zuka."',
	`En`='".$En."',
	`Ela`='".$Ela."',
	`Ena`='".$Ena."',
	`Enik`='".$Enik."',
	`Elarik`='".$Elarik."',
	`Elakoan`='".$Elakoan."',
	`Elako`='".$Elako."',
	`Elakotz`='".$Elakotz."',
	`Enean`='".$Enean."',
	`Ba`='".$Ba."',
	`BaToka`='".$BaToka."',
	`BaNoka`='".$BaNoka."',
	`BaEn`='".$BaEn."',
	`BaEla`='".$BaEla."',
	`BaEna`='".$BaEna."',
	`BaEnik`='".$BaEnik."',
	`BaElarik`='".$BaElarik."',
	`BaElakoan`='".$BaElakoan."',
	`BaElako`='".$BaElako."',
	`BaElakotz`='".$BaElakotz."',
	`BaEnean`='".$BaEnean."',
	`Bait`='".$Bait."',
	`BaitToka`='".$BaitToka."',
	`BaitNoka`='".$BaitNoka."'
	where `Giltza`='".$Giltza."'";

mysql_query($sqlupdate);
?>
<html>
<body>
<?php echo $sqlupdate ?>
</body>
</html>
