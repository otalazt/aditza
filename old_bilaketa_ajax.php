<?php
include("inc/db.php");
include('inc/array.php');
include('inc/debug.php');
include('inc/funtzioak.php');
include('inc/baldintzak.inc.php');

echo '<div id="emaitzak">';

if(!empty($Bilaketa)){
	if(isset($mode)&&$mode="debug"){
		echo "Bilaketa = ".$Bilaketa."<br />";
	}
	$galderaBilaketa = "select * from ".$basea." where (
		Eztabada='".$Bilaketa."' OR
		Toka='".$Bilaketa."' OR
		Noka='".$Bilaketa."' OR
		Xuka='".$Bilaketa."' OR
		Zuka='".$Bilaketa."' OR
		En='".$Bilaketa."' OR
		Ena='".$Bilaketa."' OR
		Enean='".$Bilaketa."' OR
		Enik='".$Bilaketa."' OR
		Ela='".$Bilaketa."' OR
		Elarik='".$Bilaketa."' OR
		Elako='".$Bilaketa."' OR
		Elakotz='".$Bilaketa."' OR
		Elakoan='".$Bilaketa."' OR
		Ba='".$Bilaketa."' OR
		BaToka='".$Bilaketa."' OR
		BaNoka='".$Bilaketa."' OR
		BaEn='".$Bilaketa."' OR
		BaEna='".$Bilaketa."' OR
		BaEnean='".$Bilaketa."' OR
		BaEnik='".$Bilaketa."' OR
		BaEla='".$Bilaketa."' OR
		BaElarik='".$Bilaketa."' OR
		BaElako='".$Bilaketa."' OR
		BaElakotz='".$Bilaketa."' OR
		BaElakoan='".$Bilaketa."' OR
		Bait='".$Bilaketa."' OR
		BaitToka='".$Bilaketa."' OR
		BaitNoka='".$Bilaketa."'
			)";
	$sqlBilaketa= mysql_query($galderaBilaketa) OR die('requête Bilaketa txarra');
	if(mysql_num_rows($sqlBilaketa)>=1) {
while($row=mysql_fetch_array($sqlBilaketa)){
$id=$row['Giltza'];
$Euskalkia=$row['Euskalkia'];
$Aditza=$row['Aditza'];
$Modua=$row['Modua'];
$Aldia=$row['Aldia'];
$Forma=$row['Forma'];
if($row['Nor']==="-"){$Nor="";}else{$Nor=$row['Nor'];}
if($row['Nori']==="-"){$Nori="";}else{$Nori=$row['Nori'];}
if($row['Nork']==="-"){$Nork="";}else{$Nork=$row['Nork'];}
$Eztabada=$row['Eztabada'];
$Toka=$row['Toka'];
$Noka=$row['Noka'];
$Xuka=$row['Xuka'];
$Zuka=$row['Zuka'];
$Ba=$row['Ba'];
$BaToka=$row['BaToka'];
$BaNoka=$row['BaNoka'];
$Bait=$row['Bait'];
$BaitToka=$row['BaitToka'];
$BaitNoka=$row['BaitNoka'];
$En=$row['En'];
$Ena=$row['Ena'];
$Ela=$row['Ela'];
$Enik=$row['Enik'];
$Elarik=$row['Elarik'];
$Elakoan=$row['Elakoan'];
$Elako=$row['Elako'];
$Elakotz=$row['Elakotz'];
$Enean=$row['Enean'];
$BaEn=$row['BaEn'];
$BaEna=$row['BaEna'];
$BaEla=$row['BaEla'];
$BaEnik=$row['BaEnik'];
$BaElarik=$row['BaElarik'];
$BaElakoan=$row['BaElakoan'];
$BaElako=$row['BaElako'];
$BaElakotz=$row['BaElakotz'];
$BaEnean=$row['BaEnean'];

if ($Eztabada === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Eztabada from ".$basea." 
			where Euskalkia = 'Batua'
			And Eztabada = '".$Eztabada."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}


else if(empty($Egina[$id])&&$Toka === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Toka from ".$basea." 
			where Euskalkia = 'Batua'
			And Toka = '".$Toka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}

else if(empty($Egina[$id])&&$Noka === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Noka from ".$basea." 
			where Euskalkia = 'Batua'
			And Noka = '".$Noka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}
else if(empty($Egina[$id])&&$Xuka === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Xuka from ".$basea." 
			where Euskalkia = 'Batua'
			And Xuka = '".$Xuka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}

else if(empty($Egina[$id])&&$Zuka === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Zuka from ".$basea." 
			where Euskalkia = 'Batua'
			And Zuka = '".$Zuka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}

else {foreach ($tratamendua as $trat) {
	if(empty($Egina[$id])&&$$trat[0] === $Bilaketa){
		if($Euskalkia === "Batua"){
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil-trat.inc.php');
			echo '</div>';
			}
		else{
			$galderatest = "select distinct En from ".$basea." 
				where Euskalkia = 'Batua'
				And En = '".$En."'
				And Aditza = '".$Aditza."' 
				And Modua = '".$Modua."'
				And Aldia = '".$Aldia."'
				And Forma = '".$Forma."'";
				if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
				if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
				if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
			$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
			if(mysql_num_rows($emaitzatest)<1) {
				$Egina[$id] = "egina";
				echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
					include('inc/bil-trat.inc.php');
				echo '</div>';
				}
		}}}
	}
}
}
else {
	$galderaBilaketaZuz = "select * from ".$basea." ";
	$sqlBilaketaZuz= mysql_query($galderaBilaketaZuz) OR die('requête Bilaketauz txarra');
	if(mysql_num_rows($sqlBilaketaZuz)>=1) {
while($row=mysql_fetch_array($sqlBilaketaZuz)){
$id=$row['Giltza'];
$Euskalkia=$row['Euskalkia'];
$Aditza=$row['Aditza'];
$Modua=$row['Modua'];
$Aldia=$row['Aldia'];
$Forma=$row['Forma'];
if($row['Nor']==="-"){$Nor="";}else{$Nor=$row['Nor'];}
if($row['Nori']==="-"){$Nori="";}else{$Nori=$row['Nori'];}
if($row['Nork']==="-"){$Nork="";}else{$Nork=$row['Nork'];}
$Eztabada=$row['Eztabada'];
$Toka=$row['Toka'];
$Noka=$row['Noka'];
$Xuka=$row['Xuka'];
$Zuka=$row['Zuka'];
$Ba=$row['Ba'];
$BaToka=$row['BaToka'];
$BaNoka=$row['BaNoka'];
$Bait=$row['Bait'];
$BaitToka=$row['BaitToka'];
$BaitNoka=$row['BaitNoka'];
$En=$row['En'];
$Ena=$row['Ena'];
$Ela=$row['Ela'];
$Enik=$row['Enik'];
$Elarik=$row['Elarik'];
$Elakoan=$row['Elakoan'];
$Elako=$row['Elako'];
$Elakotz=$row['Elakotz'];
$Enean=$row['Enean'];
$BaEn=$row['BaEn'];
$BaEna=$row['BaEna'];
$BaEla=$row['BaEla'];
$BaEnik=$row['BaEnik'];
$BaElarik=$row['BaElarik'];
$BaElakoan=$row['BaElakoan'];
$BaElako=$row['BaElako'];
$BaElakotz=$row['BaElakotz'];
$BaEnean=$row['BaEnean'];

if (garbitu($Eztabada) === garbitu($Bilaketa)){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Eztabada from ".$basea." 
			where Euskalkia = 'Batua'
			And Eztabada = '".$Eztabada."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}


else if(empty($Egina[$id])&& garbitu($Toka) === garbitu($Bilaketa)){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Toka from ".$basea." 
			where Euskalkia = 'Batua'
			And Toka = '".$Toka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}

else if(empty($Egina[$id])&&$Noka === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Noka from ".$basea." 
			where Euskalkia = 'Batua'
			And Noka = '".$Noka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}
else if(empty($Egina[$id])&&$Xuka === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Xuka from ".$basea." 
			where Euskalkia = 'Batua'
			And Xuka = '".$Xuka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}

else if(empty($Egina[$id])&&$Zuka === $Bilaketa){
	if($Euskalkia === "Batua"){
		$Egina[$id] = "egina";
		echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
			include('inc/bil.inc.php');
		echo '</div>';
		}
	else{
		$galderatest = "select distinct Zuka from ".$basea." 
			where Euskalkia = 'Batua'
			And Zuka = '".$Zuka."'
			And Aditza = '".$Aditza."' 
			And Modua = '".$Modua."'
			And Aldia = '".$Aldia."'
			And Forma = '".$Forma."'";
			if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
			if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
			if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
		$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
		if(mysql_num_rows($emaitzatest)<1) {
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil.inc.php');
			echo '</div>';
			}
		}
	}

else {foreach ($tratamendua as $trat) {
	if(empty($Egina[$id])&&$$trat[0] === $Bilaketa){
		if($Euskalkia === "Batua"){
			$Egina[$id] = "egina";
			echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
				include('inc/bil-trat.inc.php');
			echo '</div>';
			}
		else{
			$galderatest = "select distinct En from ".$basea." 
				where Euskalkia = 'Batua'
				And En = '".$En."'
				And Aditza = '".$Aditza."' 
				And Modua = '".$Modua."'
				And Aldia = '".$Aldia."'
				And Forma = '".$Forma."'";
				if($Nor===''){$galderatest.=" And (Nor = '' OR Nor='-')";} else {$galderatest.= " And Nor = '".$Nor."'";};
				if($Nori===''){$galderatest.=" And (Nori = '' OR Nori='-')";} else {$galderatest.= " And Nori = '".$Nori."'";};
				if($Nork===''){$galderatest.=" And (Nork = '' OR Nork='-')";} else {$galderatest.= " And Nork = '".$Nork."'";};
			$emaitzatest = mysql_query($galderatest) OR die('requête Eztabada test txarra');
			if(mysql_num_rows($emaitzatest)<1) {
				$Egina[$id] = "egina";
				echo '<div id="'.$id.'" class="edit_tr '.$Euskalkia.'">';
					include('inc/bil-trat.inc.php');
				echo '</div>';
				}
		}}}
	}
}
}
else {echo '0 emaitza';}
}
}
else {echo '<div class="hutsa">hitz bat bilatu</div>';}
echo '</div>';
?>
