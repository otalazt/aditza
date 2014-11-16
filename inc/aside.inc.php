<aside <?php if(isset($mode)&&$mode="debug"){echo 'style="position:relative"';}?>>
<?php
echo '<form name="taula" action="#" method="post">';

/* Opzioak */
$galderaAditza = "select distinct Aditza from ".$basea." 
			where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1) 
			Order by field (Aditza, 'Izan', '*Edun', '*Edin', '*Ezan') DESC";
$galderaEuskalkia = "select distinct Euskalkia from ".$basea." 
			where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)
			Order by field (Euskalkia, 'Batua')";
$galderaModua = "select distinct Modua from ".$basea." 
			where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";
$galderaAldia = "select distinct Aldia from ".$basea." 
			where (LENGTH(Eztabada)>1 OR LENGTH(Toka)>1 OR LENGTH(Noka)>1 OR LENGTH(Xuka)>1 OR LENGTH(Zuka)>1)";

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
<fieldset>
	<legend>Euskalkia</legend>
	<ul>
		<?php while($resultatEuskalkia = mysql_fetch_object($sqlEuskalkia)){
		$DenEuskalkia = $resultatEuskalkia->Euskalkia;
		echo '<li><label for="'.$DenEuskalkia.'" class="'.$DenEuskalkia.' ';
		if(!isset($BadaEuskalkia[$DenEuskalkia])){echo 'ezda ';}else{echo 'bada ';}
		if(isset($Euskalkia) && $Euskalkia == $DenEuskalkia) {echo 'on';}
		echo '"> <input id="'.$DenEuskalkia.'" name="Euskalkia" type="radio" value="'.$DenEuskalkia.'" onclick="this.form.submit()"';
		if(isset($Euskalkia) && $Euskalkia == $DenEuskalkia) {echo ' checked="checked"';}
		echo '/>'.$DenEuskalkia.'</label></li>';}
		?>
	</ul>
</fieldset>
<fieldset>
	<legend>Aditza</legend>
	<ul>
		<li><label for="Aditz laguntzailea" class="Aditz laguntzailea bada <?if(isset($Aditza) && $Aditza=='Aditz laguntzailea') {echo 'on';}?>"> <input id="Aditz laguntzailea" name="Aditza" type="radio" value="Aditz laguntzailea" onclick="this.form.submit()">Aditz&nbsp;laguntzailea</label></li>
		<?php while($resultatAditza = mysql_fetch_object($sqlAditza)){
		$DenAditza = $resultatAditza->Aditza;
		echo '<li><label for="'.$DenAditza.'" class="'.$DenAditza.' ';
		if(!isset($BadaAditza[$DenAditza])){echo 'ezda ';}else{echo 'bada ';}
		if(isset($Aditza) && $Aditza == $DenAditza) {echo 'on';}
		echo '"> <input id="'.$DenAditza.'" name="Aditza" type="radio" value="'.$DenAditza.'" onclick="this.form.submit()"';
		if(isset($Aditza) && $Aditza == $DenAditza) {echo ' checked="checked"';}
		echo '/>'.$DenAditza.'</label></li>';}
		?>
	</ul>
</fieldset>
<fieldset>
	<legend>Modua</legend>
	<ul>
		<?php while($resultatModua = mysql_fetch_object($sqlModua)){
		$DenModua = $resultatModua->Modua;
		echo '<li><label for="'.$DenModua.'" class="'.$DenModua.' ';
		if(!isset($BadaModua[$DenModua])){echo 'ezda ';}else{echo 'bada ';}
		if(isset($Modua) && $Modua == $DenModua) {echo 'on';}
		echo '"> <input id="'.$DenModua.'" name="Modua" type="radio" value="'.$DenModua.'" onclick="this.form.submit()"';
		if(isset($Modua) && $Modua == $DenModua) {echo ' checked="checked"';}
		echo '/>'.$DenModua.'</label></li>';}
		?>
	</ul>
</fieldset>
<fieldset>
	<legend>Aldia</legend>
	<ul>
		<?php while($resultatAldia = mysql_fetch_object($sqlAldia)){
		$DenAldia = $resultatAldia->Aldia;
		echo '<li><label for="'.$DenAldia.'" class="'.$DenAldia.' ';
		if(!isset($BadaAldia[$DenAldia])){echo 'ezda ';}else{echo 'bada ';}
		if(isset($Aldia) && $Aldia == $DenAldia) {echo 'on';}
		echo '"> <input id="'.$DenAldia.'" name="Aldia" type="radio" value="'.$DenAldia.'" onclick="this.form.submit()"';
		if(isset($Aldia) && $Aldia == $DenAldia) {echo ' checked="checked"';}
		echo '/>'.$DenAldia.'</label></li>';}
		?>
	</ul>
</fieldset>
</form>

</aside>
