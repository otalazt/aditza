<?php
/* mysql galderaren oinarria */
$galdera = " ";

/*Nor */
if (isset ($Nor)){
	if ($Nor != 'Denak') {
		$galderaNor = ' where Nor like "' . $Nor. '"';
		$galdera = $galdera.$galderaNor;
		$haunor = $Nor;
	}
}
/*Nori*/
if (isset ($Nori))
	{if ($Nori != 'Denak') {
		if ($galdera != " ") {
			$galderaNori = ' AND Nori like "' . $Nori. '"';}
		else {$galderaNori = ' where Nori like "' . $Nori. '"';}
		$galdera = $galdera.$galderaNori;
		$haunori = $Nori;
	}
}
/*Nork*/
if (isset ($Nork)) 
	{if ($Nork != 'Denak') {
		if ($galdera != " ") {
			$galderaNork = ' AND Nork like "' . $Nork. '"';}
		else {$galderaNork = ' where Nork like "' . $Nork. '"';}
		$galdera = $galdera.$galderaNork;
		$haunork = $Nork;}
	}
/*Modua*/
if (isset ($Modua)) 
	{if ($Modua != 'Denak') {
		if ($galdera != " ") {
			$galderaModua = ' AND Modua like "' . $Modua. '"';}
		else {$galderaModua = ' where Modua like "' . $Modua. '"';}
		$galdera = $galdera.$galderaModua;
		$haumodua = $Modua;}
	}
/*Aldia*/
if (isset ($Aldia)) 
	{if ($Aldia != 'Denak') {
		if ($galdera != " ") {
			$galderaAldia = ' AND Aldia like "' . $Aldia. '"';}
		else {$galderaAldia = ' where Aldia like "' . $Aldia. '"';}
		$galdera = $galdera.$galderaAldia;
		$haualdia = $Aldia;}
	}
/*Forma*/
if (isset ($Forma)) 
	{if ($Forma != 'Denak') {
		if ($galdera != " ") {
			$galderaForma = ' AND Forma like "' . $Forma. '"';}
		else {$galderaForma = ' where Forma like "' . $Forma. '"';}
		$galdera = $galdera.$galderaForma;
		$hauforma = $Forma;}
	}
/*Euskalkia*/
if (isset ($Euskalkia)) 
	{if ($Euskalkia != 'Denak') {
		if ($galdera != " ") {
			$galderaEuskalkia = ' AND Euskalkia like "' . $Euskalkia. '"';}
		else {$galderaEuskalkia = ' where Euskalkia like "' . $Euskalkia. '"';}
		$galdera = $galdera.$galderaEuskalkia;
		$haueuskalkia = $Euskalkia;}
	}
/*Aditza*/
if (isset ($Aditza)) 
	{if ($Aditza != 'Denak') {
		if ($galdera != " ") {
			if ($Aditza == "Aditz laguntzailea") {$galderaAditza = ' AND Aditza="*Edin" or Aditza="*Edun" or Aditza="*Ezan" or Aditza="Izan"';}
			else {
				if ($Aditza == "Aditz trinkoak") {$galderaAditza = ' AND Aditza<>"*Edin" AND Aditza<>"*Edun" AND Aditza<>"*Ezan" AND Aditza<>"Izan"';}
				else {$galderaAditza = ' AND Aditza like "' . $Aditza. '"';}
				}
			}
		else {
			if ($Aditza == "Aditz laguntzailea") {$galderaAditza = ' where Aditza="*Edin" or Aditza="*Edun" or Aditza="*Ezan" or Aditza="Izan"';}
			else {
				if ($Aditza == "Aditz trinkoak") {$galderaAditza = ' where Aditza<>"*Edin" and Aditza<>"*Edun" and Aditza<>"*Ezan" and Aditza<>"Izan"';}
				else {$galderaAditza = ' where Aditza like "' . $Aditza. '"';}}}
		$galdera = $galdera.$galderaAditza;
		$hauaditza = $Aditza;}
	}


/*galdera arrunta*/
if ($galdera != " "){
$galdera1 = " select * from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galdera1Mug = " select * from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1) LIMIT ".$Mugazero.", ".$Muga;
$galderaNor = " select distinct Nor from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaNori = " select distinct Nori from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaNork = " select distinct Nork from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaModua = " select distinct Modua from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaAldia = " select distinct Aldia from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaForma = " select distinct Forma from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaAditza = " select distinct Aditza from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaEuskalkia = " select distinct Euskalkia from ".$basea." ".$galdera." and (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
}
else {
$galdera1 = " select * from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galdera1Mug = " select * from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1) LIMIT ".$Mugazero.", ".$Muga;
$galderaNor = " select distinct Nor from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaNori = " select distinct Nori from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaNork = " select distinct Nork from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaModua = " select distinct Modua from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaAldia = " select distinct Aldia from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaForma = " select distinct Forma from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaAditza = " select distinct Aditza from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaEuskalkia = " select distinct Euskalkia from ".$basea." ".$galdera." WHERE (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
}

if ( isset($mode) && $mode == 'debug')  {
echo 'galdera = '.$galdera.'<br />';
echo 'galdera1 = '.$galdera1.'<br />';
echo 'galderaNor = '.$galderaNor.'<br />';
echo 'galderaNori = '.$galderaNori.'<br />';
echo 'galderaNork = '.$galderaNork.'<br />';
echo 'galderaModua = '.$galderaModua.'<br />';
echo 'galderaAldia = '.$galderaAldia.'<br />';
echo 'galderaForma = '.$galderaForma.'<br />';
echo 'galderaAditza = '.$galderaAditza.'<br />';
echo 'galderaEuskalkia = '.$galderaEuskalkia.'<br />';
echo 'galderaMuga = '.$galdera1Mug.'<br />';
}




$emaitza = mysql_query($galdera1) OR die('requête MySQL txarra');
$emaitzaMug = mysql_query($galdera1Mug) OR die('requête Mug MySQL txarra');
/* Emaitzak 
$emaitzaNor = mysql_query($galderaNor) OR die('requête Nor txarra');
$emaitzaNori = mysql_query($galderaNori) OR die('requête Nori txarra');
$emaitzaNork = mysql_query($galderaNork) OR die('requête Nork txarra');
$emaitzaModua = mysql_query($galderaModua) OR die('requête Modua txarra');
$emaitzaAldia = mysql_query($galderaAldia) OR die('requête Aldia txarra');
$emaitzaForma = mysql_query($galderaForma) OR die('requête Forma txarra');
$emaitzaAditza = mysql_query($galderaAditza) OR die('requête Aditza txarra');
$emaitzaEuskalkia = mysql_query($galderaEuskalkia) OR die('requête Aditza txarra');


while($resultatNor = mysql_fetch_object($emaitzaNor)){
		$BadaNor[$resultatNor->Nor] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaNor = $resultatNor->Nor <br />";}
		}
while($resultatNori = mysql_fetch_object($emaitzaNori)){
		$BadaNori[$resultatNori->Nori] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaNori = $resultatNori->Nori <br />";}
		}
while($resultatNork = mysql_fetch_object($emaitzaNork)){
		$BadaNork[$resultatNork->Nork] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaNork = $resultatNork->Nork <br />";}
		}
while($resultatModua = mysql_fetch_object($emaitzaModua)){
		$BadaModua[$resultatModua->Modua] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaModua = $resultatModua->Modua <br />";}
		}
while($resultatAldia = mysql_fetch_object($emaitzaAldia)){
		$BadaAldia[$resultatAldia->Aldia] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaAldia = $resultatAldia->Aldia <br />";}
		}
while($resultatForma = mysql_fetch_object($emaitzaForma)){
		$BadaForma[$resultatForma->Forma] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaForma = $resultatForma->Forma <br />";}
		}
while($resultatAditza = mysql_fetch_object($emaitzaAditza)){
		$BadaAditza[$resultatAditza->Aditza] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaAditza = $resultatAditza->Aditza <br />";}
		}
while($resultatEuskalkia = mysql_fetch_object($emaitzaEuskalkia)){
		$BadaEuskalkia[$resultatEuskalkia->Euskalkia] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaEuskalkia = $resultatEuskalkia->Euskalkia <br />";}
		}*/
?>
