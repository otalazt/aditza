<?php

	echo '<div class="euskalki div'.$Euskalkia.'"><span class="spaneuskalki" id="euskalkia_'.$id.'">'.$Euskalkia.'</span></div>';
	echo '<div class="aditza">
			<span class="text spanlehena aditza">
				<span class="textAditza '.$Aditza.'" id="aditza_'.$id.'">';
	if(($Aditza=='Izan') || ($Aditza=='*Edun') || ($Aditza=='*Edin') || ($Aditza=='*Ezan')) {echo 'Aditz laguntzailea <span class="ttiki">('.$Aditza.')</span>';}
		else { echo $Aditza;}
	echo '</span>
			</span>
		</div>';
	echo '<div class="modualdia">
		<span class="text spanlehena modua">
			<span class="textModua '.$Modua.'" id="modua_'.$id.'">'.$Modua.'</span></span>
		<span class="text spanlehena aldia">
			<span class="textAldia '.$Aldia.'" id="aldia_'.$id.'">'.$Aldia.'</span></span>
		</div>';
	echo '<div class="forma">
		<span class="text spanlehena forma">
			<span class="textForma '.$Forma.'" id="forma_'.$id.'">'.$Forma.'</span></span>
		</div>';
	echo '<div class="nnn">
		<span class="text spannnn nor">
			<span class="textLeg">Nor:</span><span class="textNor '.$Nor.'" id="nor_'.$id.'">';
		if(isset($Nor) && $Nor!=""){echo $Nor;}else{echo"-";}
		echo '</span></span>
		<span class="text spannnn nori">
			<span class="textLeg">Nori:</span><span class="textNori '.$Nori.'" id="nori_'.$id.'">';
		if(isset($Nori) && $Nori!=""){echo $Nori;}else{echo"-";};
		echo '</span></span>
		<span class="text spannnn nork">
			<span class="textLeg">Nork:</span><span class="textNork '.$Nork.'" id="nork_'.$id.'">';
		if(isset($Nork) && $Nork!=""){echo $Nork;}else{echo"-";};
		echo '</span></span>
		</div>';
	$galdera2=" from ".$basea." 
			where Euskalkia = '".$Euskalkia."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galdera2.=" And (Nor = '' OR Nor='-')";} else {$galdera2.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galdera2.=" And (Nori = '' OR Nori='-')";} else {$galdera2.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galdera2.=" And (Nork = '' OR Nork='-')";} else {$galdera2.= " And Nork = '".$Nork."'";};
	echo '<div class="nagusia">';
	echo '<span class="text spannagusia tratamendua">';
		echo $$trat[0]." <span class='tratattipi'>(".$trat[1].")</span>";
		echo '</span>';
	$galderaEztabada = "select distinct Eztabada".$galdera2." AND Eztabada <> '' AND Eztabada <> '-'";
	$emaitzaEztabada = mysql_query($galderaEztabada) OR die('requête Eztabada ('.$galderaEztabada.') txarra');
	if(mysql_num_rows($emaitzaEztabada)>=1) {
		echo '<span class="text spannagusia eztabada">';
		while($resultatEztabada = mysql_fetch_object($emaitzaEztabada)){
			echo '<span class="text textEztabada">'.$resultatEztabada->Eztabada.'</span>';}
			echo '</span>';
	}
	$galderaToka = "select distinct Toka".$galdera2." AND Toka <> '' AND Toka <> '-'";
	$emaitzaToka = mysql_query($galderaToka) OR die('requête Toka txarra');
	if(mysql_num_rows($emaitzaToka)>=1) {
		echo '<span class="text spannagusia toka">
			<span class="textLeg">toka:</span>';
		while($resultatToka = mysql_fetch_object($emaitzaToka)){
			echo '<span class="text textToka">'.$resultatToka->Toka.'</span>';}
			echo '</span>';
	}
	$galderaNoka = "select distinct Noka".$galdera2." AND Noka <> '' AND Noka <> '-'";
	$emaitzaNoka = mysql_query($galderaNoka) OR die('requête Noka txarra');
	if(mysql_num_rows($emaitzaNoka)>=1) {
		echo '<span class="text spannagusia noka">
			<span class="textLeg">noka:</span>';
		while($resultatNoka = mysql_fetch_object($emaitzaNoka)){
			echo '<span class="text textNoka">'.$resultatNoka->Noka.'</span>';}
			echo '</span>';
	}
	$galderaXuka = "select distinct Xuka".$galdera2." AND Xuka <> '' AND Xuka <> '-'";
	$emaitzaXuka = mysql_query($galderaXuka) OR die('requête Xuka txarra');
	if(mysql_num_rows($emaitzaXuka)>=1) {
		echo '<span class="text spannagusia xuka">
			<span class="textLeg">xuka:</span>';
		while($resultatXuka = mysql_fetch_object($emaitzaXuka)){
			echo '<span class="text textXuka">'.$resultatXuka->Xuka.'</span>';}
			echo '</span>';
	}
	$galderaZuka = "select distinct Zuka".$galdera2." AND Zuka <> '' AND Zuka <> '-'";
	$emaitzaZuka = mysql_query($galderaZuka) OR die('requête Zuka txarra');
	if(mysql_num_rows($emaitzaZuka)>=1) {
		echo '<span class="text spannagusia zuka">
			<span class="textLeg">zuka:</span>';
		while($resultatZuka = mysql_fetch_object($emaitzaZuka)){
			echo '<span class="text textZuka">'.$resultatZuka->Zuka.'</span>';}
			echo '</span>';
	}
	echo '</div>';
?>
