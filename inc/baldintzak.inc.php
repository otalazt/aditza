<?php
//******************
// Baldintzak bildu
//******************

// hustu
if (isset ($_POST["hustu"])){
	foreach($baldintzak as $baldintza){
		if (isset ($_POST["$baldintza"])){
			unset($_POST["$baldintza"]);
			}
		}
	unset($_POST["hustu"]);
	}

// Get eta Post guziak bildu
foreach($baldintzak as $baldintza){
	if (isset ($_POST["$baldintza"]) && $_POST["$baldintza"]!=""){
		if (isset($mode) && $mode == 'debug'){
			echo '<p class="debug2">Post '.$baldintza;
			}
		$$baldintza = htmlspecialchars($_POST["$baldintza"]);
		if (isset($mode) && $mode == 'debug'){
			echo '='.$$baldintza.'</p>';
			}
		}
	elseif (isset ($_GET["$baldintza"]) && $_GET["$baldintza"]!=""){
		if (isset($mode) && $mode == 'debug'){
			echo '<p class="debug2">Get '.$baldintza;
			}
		$$baldintza = htmlspecialchars($_GET["$baldintza"]);
		if (isset($mode) && $mode == 'debug'){
			echo '='.$$baldintza.'</p>';
			}
		}
	else {if (isset($mode) && $mode == 'debug'){
			echo '<p class="debug3">'.$baldintza.' ez da.</p>';
			}
		}
	if (isset ($_POST["$baldintza"])){unset($_POST["$baldintza"]);}
	if (isset ($_GET["$baldintza"])){unset($_GET["$baldintza"]);}
	}
if (empty($Muga)){$Muga = 20;}
if (empty($Mugazero)){$Mugazero=0;}
$Mugabi = $Mugazero+ $Muga;
if (isset($mode) && $mode == 'debug'){
	echo '<p class="debug2">Muga = '.$Muga.' - Mugazero = '.$Mugazero.' - Mugabi = '.$Mugabi.'</p>';
}

foreach($lowerak as $lower){
	if (isset ($$lower)){$$lower=strtolower($$lower);
		if (isset($mode) && $mode == 'debug'){echo "lower ".$lower." = ".$$lower."<br />";}
		}
}
?>
