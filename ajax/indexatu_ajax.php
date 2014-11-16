<?php
include("../inc/db.php");
include('../inc/array.php');
include('../inc/debug.php');
include('../inc/funtzioak.php');
include('../inc/baldintzak.inc.php');

 
// Indexatu
$truncate = "TRUNCATE TABLE `AditzaZer`";
$result = mysql_query($truncate);

// Emaitzak kondatu


//Eztabada
$galdera = "SELECT `Giltza`,`Eztabada` FROM `".$basea."` WHERE `Eztabada` <> '' AND `Eztabada` <> '-'";
$sql=mysql_query($galdera)OR die('requête sql txarra');
while($row=mysql_fetch_array($sql)){
	$Giltza=$row['Giltza'];
	$Forma='Eztabada';
	$Aditza=$row['Eztabada'];
	$Garbitua=garbitu($row['Eztabada']);
	$galderaadd = "INSERT INTO `".$basea2."` (`Giltza`,`Forma`,`Aditza`,`Garbitua`)
		VALUES ('".$Giltza."','".$Forma."','".$Aditza."','".$Garbitua."')";
	mysql_query($galderaadd);
	$i++;
}
//Toka
$galdera = "SELECT `Giltza`,`Toka` FROM `".$basea."` WHERE `Toka` <> '' AND `Toka` <> '-'";
$sql=mysql_query($galdera)OR die('requête sql txarra');
while($row=mysql_fetch_array($sql)){
	$Giltza=$row['Giltza'];
	$Forma='Toka';
	$Aditza=$row['Toka'];
	$Garbitua=garbitu($row['Toka']);
	$galderaadd = "INSERT INTO `".$basea2."` (`Giltza`,`Forma`,`Aditza`,`Garbitua`)
		VALUES ('".$Giltza."','".$Forma."','".$Aditza."','".$Garbitua."')";
	mysql_query($galderaadd);
}
//Noka
$galdera = "SELECT `Giltza`,`Noka` FROM `".$basea."` WHERE `Noka` <> '' AND `Noka` <> '-'";
$sql=mysql_query($galdera)OR die('requête sql txarra');
while($row=mysql_fetch_array($sql)){
	$Giltza=$row['Giltza'];
	$Forma='Noka';
	$Aditza=$row['Noka'];
	$Garbitua=garbitu($row['Noka']);
	$galderaadd = "INSERT INTO `".$basea2."` (`Giltza`,`Forma`,`Aditza`,`Garbitua`)
		VALUES ('".$Giltza."','".$Forma."','".$Aditza."','".$Garbitua."')";
	mysql_query($galderaadd);
	$i++;
}
//Xuka
$galdera = "SELECT `Giltza`,`Xuka` FROM `".$basea."` WHERE `Xuka` <> '' AND `Xuka` <> '-'";
$sql=mysql_query($galdera)OR die('requête sql txarra');
while($row=mysql_fetch_array($sql)){
	$Giltza=$row['Giltza'];
	$Forma='Xuka';
	$Aditza=$row['Xuka'];
	$Garbitua=garbitu($row['Xuka']);
	$galderaadd = "INSERT INTO `".$basea2."` (`Giltza`,`Forma`,`Aditza`,`Garbitua`)
		VALUES ('".$Giltza."','".$Forma."','".$Aditza."','".$Garbitua."')";
	mysql_query($galderaadd);
	$i++;
}
//Zuka
$galdera = "SELECT `Giltza`,`Zuka` FROM `".$basea."` WHERE `Zuka` <> '' AND `Zuka` <> '-'";
$sql=mysql_query($galdera)OR die('requête sql txarra');
while($row=mysql_fetch_array($sql)){
	$Giltza=$row['Giltza'];
	$Forma='Zuka';
	$Aditza=$row['Zuka'];
	$Garbitua=garbitu($row['Zuka']);
	$galderaadd = "INSERT INTO `".$basea2."` (`Giltza`,`Forma`,`Aditza`,`Garbitua`)
		VALUES ('".$Giltza."','".$Forma."','".$Aditza."','".$Garbitua."')";
	mysql_query($galderaadd);
	$i++;
}
//Besteak
foreach ($tratamendua as $trat) {
	$galdera = "SELECT `Giltza`,`".$trat[0]."` FROM `".$basea."` WHERE `".$trat[0]."` <> '' AND `".$trat[0]."` <> '-'";
	$sql=mysql_query($galdera)OR die('requête sql txarra');
	while($row=mysql_fetch_array($sql)){
		$Giltza=$row['Giltza'];
		$Forma=$trat[1];
		$Aditza=$row[$trat[0]];
		$Garbitua=garbitu($row[$trat[0]]);
		$galderaadd = "INSERT INTO `".$basea2."` (`Giltza`,`Forma`,`Aditza`,`Garbitua`)
			VALUES ('".$Giltza."','".$Forma."','".$Aditza."','".$Garbitua."')";
		mysql_query($galderaadd);
		$i++;
	}
}
echo "<div> Berindexazioa bukatua da.</div>";


	?>
