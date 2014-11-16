<?php
$sql= mysql_query($galdera1Mug);

/* Opzioak */
$sqlAditza= mysql_query($galderaAditza);
$sqlEuskalkia= mysql_query($galderaEuskalkia);
$sqlModua= mysql_query($galderaModua);
$sqlForma= mysql_query($galderaForma);
$sqlNor= mysql_query($galderaNor);
$sqlNori= mysql_query($galderaNori);
$sqlNork= mysql_query($galderaNork);

echo '<form name="taula" action="#" method="post">';

/* Opzioak */
$galderaAditza = "select distinct Aditza from ".$basea." where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaEuskalkia = "select distinct Euskalkia from ".$basea." where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaModua = "select distinct Modua from ".$basea." where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaAldia = "select distinct Aldia from ".$basea." where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";

$sqlAditza= mysql_query($galderaAditza);
$sqlEuskalkia= mysql_query($galderaEuskalkia);
$sqlModua= mysql_query($galderaModua);
$sqlAldia= mysql_query($galderaAldia);

/* Bada ala ezda */
if (empty($Euskalkia)){$Euskalkia="Batua";}
/* Bada Aditza */

$galderaBadaAditza = "select distinct Aditza from ".$basea." where Euskalkia = '".$Euskalkia."' 
		AND (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";

if ( isset($mode) && $mode == 'debug') {echo "galderaBadaAditza = $galderaBadaAditza <br />";}
$emaitzaAditza = mysql_query($galderaBadaAditza) OR die('requête Bada Aditza txarra');
while($resultatAditza = mysql_fetch_object($emaitzaAditza)){
		$BadaAditza[$resultatAditza->Aditza] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaAditza = $resultatAditza->Aditza <br />";}
		}
if (empty($Aditza)){$Aditza="Aditz laguntzailea";}


/* Bada Modua */
if ($Aditza == "Aditz laguntzailea") {
	$galderaBadaModua = "select distinct Modua from ".$basea." where Euskalkia = '".$Euskalkia."' 
		AND (Aditza = 'Izan' OR Aditza = '*Edun' OR Aditza = '*Edin' OR Aditza = '*Ezan')
		AND (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
	}
	else
	{
	$galderaBadaModua = "select distinct Modua from ".$basea." where Euskalkia = '".$Euskalkia."' AND Aditza = '".$Aditza."' AND(LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";}


if ( isset($mode) && $mode == 'debug') {echo "galderaBadaModua = $galderaBadaModua <br />";
}

$emaitzaModua = mysql_query($galderaBadaModua) OR die('requête Bada Modua txarra');


while($resultatModua = mysql_fetch_object($emaitzaModua)){
		$BadaModua[$resultatModua->Modua] = "bada";
		if (empty($Modua)){$Modua=$resultatModua->Modua;}
		if ( isset($mode) && $mode == 'debug') {echo "badaModua = $resultatModua->Modua <br />";}
		}


/* Bada Aldia */ 
if($Modua=='Indikatiboa'){
	if(empty($Aldia)){$Aldia = 'Oraina';}
	else if(($Aldia!='Oraina')&&($Aldia!='Iragana')){$Aldia = 'Oraina';}
	}
if($Modua=='Baldintzak'){
	if(empty($Aldia)){$Aldia = 'Aurrekoa';}
	else if(($Aldia!='Aurrekoa')&&($Aldia!='Ondorioa-Orain')&&($Aldia!='Ondorioa-Lehen')){$Aldia = 'Aurrekoa';}
	}
if($Modua=='Ahalera'){
	if(empty($Aldia)){$Aldia = 'Oraina';}
	else if(($Aldia!='Oraina')&&($Aldia!='Iragana')&&($Aldia!='Hipotetikoa')){$Aldia = 'Oraina';}
	}
if($Modua=='Subjuntiboa'){
	if(empty($Aldia)){$Aldia = 'Oraina';}
	else if(($Aldia!='Oraina')&&($Aldia!='Iragana')){$Aldia = 'Oraina';}
	}
if($Modua=='Agintera'){$Aldia = 'Oraina';}
$galderaBadaAldia= "select distinct Aldia from ".$basea." where Modua = '".$Modua."' 
		AND (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1)";

if ( isset($mode) && $mode == 'debug') {echo "galderaBadaAldia = $galderaBadaAldia <br />";}

$emaitzaAldia = mysql_query($galderaBadaAldia) OR die('requête Bada Aldia txarra');

while($resultatAldia = mysql_fetch_object($emaitzaAldia)){
		$BadaAldia[$resultatAldia->Aldia] = "bada";
		if ( isset($mode) && $mode == 'debug') {echo "badaAldia = $resultatAldia->Aldia <br />";}
		}
?>
