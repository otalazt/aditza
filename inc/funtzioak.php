<?php

//hitzak moztu
function azkenbat($hitza){
	return substr($hitza, -1);
}
function azkenbi($hitza){
	return substr($hitza, -2);
}
function azkenhiru($hitza){
	return substr($hitza, -3);
}
function lehenbat($hitza){
	return substr($hitza,0,1);
}
function lehenbi($hitza){
	return substr($hitza,0,2);
}
function lehenhiru($hitza){
	return substr($hitza,0,3);
}
function batgabe($hitza){
	return substr($hitza,0,strlen($hitza)-1);
}
function bigabe($hitza){
	return substr($hitza,0,strlen($hitza)-2);
}
function hirugabe($hitza){
	return substr($hitza,0,strlen($hitza)-3);
}
function Lbatgabe($hitza){
	return substr($hitza,1,strlen($hitza)-1);
}
function Lbigabe($hitza){
	return substr($hitza,2,strlen($hitza)-2);
}
function Lhirugabe($hitza){
	return substr($hitza,3,strlen($hitza)-3);
}



// menderagailuak
function en($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if(azkenbi($aditza)=="gu" || azkenbi($aditza)=="zu"){return $aditza."n";}
		elseif(azkenbi($aditza)=="ke" || azkenbi($aditza)=="go"){return $aditza."en";}
		elseif($aditza=="da"
				||$aditza=="gara"
				||$aditza=="zara"
				||$aditza=="dira"){return batgabe($aditza)."en";}
		elseif(azkenbat($aditza)=="a"
				||azkenbat($aditza)=="e"
				||azkenbat($aditza)=="o"){return $aditza."n";}
		elseif(azkenbat($aditza)=="t"){
			if(stripos($Euskalkia, 'Nafar-Lapurtera') !== false) {
			return batgabe($aditza)."ten";}
			else {return batgabe($aditza)."dan";}
			}
		elseif(azkenbat($aditza)=="n"){return $aditza;}
		else {return $aditza."en";}
	}
}
function ela($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if(azkenbi($aditza)=="gu" || azkenbi($aditza)=="zu"){return $aditza."la";}
		elseif(azkenbi($aditza)=="ke" || azkenbi($aditza)=="go"){return $aditza."ela";}
		elseif($aditza=="da"
				||$aditza=="gara"
				||$aditza=="zara"
				||$aditza=="dira"){return batgabe($aditza)."ela";}
		elseif(azkenbat($aditza)=="a"
				||azkenbat($aditza)=="e"
				||azkenbat($aditza)=="o"){return $aditza."la";}
		elseif(azkenbat($aditza)=="t"){
			if(stripos($Euskalkia, 'Nafar-Lapurtera') !== false) {
			return batgabe($aditza)."tela";}
			else {return batgabe($aditza)."dala";}
			}
		elseif(azkenbat($aditza)=="n"){return batgabe($aditza)."la";}
		else {return $aditza."ela";}
	}
}
function ena($aditza,$Modua,$Aldia,$Euskalkia){if(!empty($aditza) && ($aditza != "-")){$bil = en($aditza,$Modua,$Aldia,$Euskalkia)."a";return $bil;}}
function enik($aditza,$Modua,$Aldia,$Euskalkia){if(!empty($aditza) && ($aditza != "-")){$bil = en($aditza,$Modua,$Aldia,$Euskalkia)."ik";return $bil;}}
function elarik($aditza,$Modua,$Aldia,$Euskalkia){if(!empty($aditza) && ($aditza != "-")){$bil = ela($aditza,$Modua,$Aldia,$Euskalkia)."rik";return $bil;}}
function elakoan($aditza,$Modua,$Aldia,$Euskalkia){if(!empty($aditza) && ($aditza != "-")){$bil = ela($aditza,$Modua,$Aldia,$Euskalkia)."koan";return $bil;}}
function elako($aditza,$Modua,$Aldia,$Euskalkia){if(!empty($aditza) && ($aditza != "-")){$bil = ela($aditza,$Modua,$Aldia,$Euskalkia)."ko";return $bil;}}
function elakotz($aditza,$Modua,$Aldia,$Euskalkia){if(!empty($aditza) && ($aditza != "-")){$bil = ela($aditza,$Modua,$Aldia,$Euskalkia)."kotz";return $bil;}}
function enean($aditza,$Modua,$Aldia,$Euskalkia){if(!empty($aditza) && ($aditza != "-")){$bil = en($aditza,$Modua,$Aldia,$Euskalkia)."ean";return $bil;}}

function ba($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".$aditza;return $bil;}
	}
}
function baen($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".en($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baela($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".ela($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baena($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".ena($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baenik($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".enik($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baelarik($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".elarik($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baelakoan($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".elakoan($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baelako($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".elako($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baelakotz($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".elakotz($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}
function baenean($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {$bil = "ba".enean($aditza,$Modua,$Aldia,$Euskalkia);return $bil;}
	}
}


function bait($aditza,$Modua,$Aldia,$Euskalkia){
	if(!empty($aditza) && ($aditza != "-")){
		if($Modua=="Agintera"
		|| ($Modua == "Baldintzak" && $Aldia== "Aurrekoa"))
		{}
		else {
			if(stripos($Euskalkia, 'zuberera') !== false) {
				if(lehenbat($aditza)=="d"){return "beit".Lbatgabe($aditza);}
				elseif (lehenbat($aditza)=="g"){return "beit".Lbatgabe($aditza);}
				else {return "beit".$aditza;}
				}
			else {
				if(lehenbat($aditza)=="d"){return "bait".Lbatgabe($aditza);}
				elseif (lehenbat($aditza)=="g"){return "baik".Lbatgabe($aditza);}
				elseif (lehenbat($aditza)=="n"
						||lehenbat($aditza)=="h"){return "bai".$aditza;}
				else {return "bait".$aditza;}
				}	
			}
	}
}

// ID bereziendako garbiketak 
function garbi($string){
	$caracteres = array(
		'À' => 'a', 'Á' => 'a', 'Â' => 'a', 'Ä' => 'a', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ä' => 'a', '@' => 'a',
		'È' => 'e', 'É' => 'e', 'Ê' => 'e', 'Ë' => 'e', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', '€' => 'e',
		'Ì' => 'i', 'Í' => 'i', 'Î' => 'i', 'Ï' => 'i', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
		'Ò' => 'o', 'Ó' => 'o', 'Ô' => 'o', 'Ö' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'ö' => 'o',
		'Ù' => 'u', 'Ú' => 'u', 'Û' => 'u', 'Ü' => 'u', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'µ' => 'u',
		'Œ' => 'oe', 'œ' => 'oe',
		'$' => 's');
 	$string = strtr($string, $caracteres);
	$string = preg_replace('#[^A-Za-z0-9]+#', '-', $string);
	$string = trim($string, '-');
	$string = strtolower($string);
 	return $string;
}

function tratatu($string){
	$tratatzekoa = array(
		'Eztabada'=>$EztabadaT,
		'Toka'=>$TokaT,
		'Noka'=>$NokaT);
	$string = strtr($string, $tratatzekoa);
	return $string;
}
// ortografia hutsak zuzentzeko
function garbitu($string){
	$caracteres = array(
		'À' => 'a', 'Á' => 'a', 'Â' => 'a', 'Ä' => 'a', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ä' => 'a', '@' => 'a',
		'È' => 'e', 'É' => 'e', 'Ê' => 'e', 'Ë' => 'e', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', '€' => 'e',
		'Ì' => 'i', 'Í' => 'i', 'Î' => 'i', 'Ï' => 'i', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
		'Ò' => 'o', 'Ó' => 'o', 'Ô' => 'o', 'Ö' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'ö' => 'o',
		'Ù' => 'u', 'Ú' => 'u', 'Û' => 'u', 'Ü' => 'u', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'µ' => 'u',
		'Œ' => 'oe', 'œ' => 'oe',
		'tz' => 'z', 'tx' => 'z', 'ñ' => 'ni', 'h' => '',
		'agu' => 'au', 'egu' => 'eu' , 'igu' => 'iu', 'ogu' => 'ou', 'ugu' => 'uu',
		'aa' => 'a', 'ee' => 'e' , 'ii' => 'i', 'oo' => 'o', 'uu' => 'u',
		'aa' => 'a', 'ea' => 'e' , 'ia' => 'i', 'oa' => 'o', 'ua' => 'u',
		'ae' => 'a', 'ee' => 'e' , 'ie' => 'i', 'oe' => 'o', 'ue' => 'u',
		'ai' => 'a', 'ei' => 'e' , 'ii' => 'i', 'oi' => 'o', 'ui' => 'u',
		'ao' => 'a', 'eo' => 'e' , 'io' => 'i', 'oo' => 'o', 'uo' => 'u',
		'au' => 'a', 'eu' => 'e' , 'iu' => 'i', 'ou' => 'o', 'uu' => 'u',
		'agu' => 'au', 'egu' => 'eu' , 'igu' => 'iu', 'ogu' => 'ou', 'ugu' => 'uu',
		'x' => 'z', 's' => 'z', 'dx' => 'z', 'dz' => 'z', 
		'$' => 's');
 	$string = strtr($string, $caracteres);
	$string = preg_replace('#[^A-Za-z0-9]+#', '-', $string);
	$string = trim($string, '-');
	$string = strtolower($string);
 	return $string;
}
//Debugatzeko
function printr($var, $pIsSQL=false, $pIsOpen=true){
        $lColor = (is_string($pIsSQL)?$pIsSQL:($pIsSQL===true?'#FFF5DD':'#F2FFEE'));
        $pIsSQL = ($pIsSQL===true || $lColor=='#FEE');
        $var = ($pIsSQL===true?wordwrap($var.";\n", 100):$var);
        $lHeight = ($pIsSQL===true?'100px':'200px');
        $lUniqId = uniqid(md5(rand()));
        echo '<table cellspacing="0" cellpadding="0" style="width:100%;border:1px dashed gray;background-color:'.$lColor.';">
            <tr><td><a style="display:block;padding:4px;" href="javascript&#058;void(0);"
                  onClick="var tr = document.getElementById(\'printr_'.$lUniqId.'\');
                        if (tr.style.display!=\'none\') tr.style.display = \'none\';
                        else tr.style.display = \'table-row\';"><img
                  src="../img/sort_down.jpg" border="none" /></a></td></tr>
            <tr style="display:'.($pIsOpen?'table-row':'none').';"
                  id="printr_'.$lUniqId.'"><td><textarea
                  style="padding:2 5px;width:100%;overflow:auto;height:'.$lHeight.';background-color:transparent;
                  border:none;border-top:1px dashed gray;font-size:11px;font-family:monospace;"
                  title="Affichage avec print_r() pour debug" '.($pIsSQL===true?' onFocus="select();"':'').'>';
        @print_r($var);
        echo '</textarea></td></tr></table>';
}
?>

