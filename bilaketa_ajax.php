<?php
include("inc/db.php");
include('inc/array.php');
include('inc/debug.php');
include('inc/funtzioak.php');
include('inc/baldintzak.inc.php');
echo '<div id="emaitzak">';

if(!empty($Bilaketa)){
	//galdera arrunta
	$galderaBilaketa = "select Giltza from ".$basea2." where Aditza ='".$Bilaketa."'";
	$sqlBilaketa= mysql_query($galderaBilaketa) OR die('requête Bilaketa txarra');
	// galdera pettoekin
	$galderaBilaketaG = "select Giltza from ".$basea2." where Garbitua ='".garbitu($Bilaketa)."'";
	$sqlBilaketaG= mysql_query($galderaBilaketaG) OR die('requête BilaketaG txarra');
	// galdera pettoekin baina desberdina
	$galderaBilaketaD = "select DISTINCT Aditza from ".$basea2." where Garbitua ='".garbitu($Bilaketa)."' AND Aditza <>'".$Bilaketa."' ";
	$sqlBilaketaD= mysql_query($galderaBilaketaD) OR die('requête BilaketaG txarra');

	if(mysql_num_rows($sqlBilaketa)>=1) {
		mysql_query("Create TEMPORARY TABLE `Test` LIKE `Aditza`");
		while($sql=mysql_fetch_array($sqlBilaketa)){
			$galdera2 = "select * from ".$basea." where Giltza ='".$sql[Giltza]."'";
			$sqlgaldera2= mysql_query($galdera2) OR die('requête galdera2 txarra');
			while($emaitza=mysql_fetch_array($sqlgaldera2)){
				$sqladd = "INSERT INTO Test (`Giltza`,`Euskalkia`,`Aditza`,`Modua`,`Aldia`,`Forma`,`Nor`,`Nori`,`Nork`,`Eztabada`,`Toka`,`Noka`,`Xuka`,`Zuka`,`En`,`Ela`,`Ena`,`Enik`,`Elarik`,`Elakoan`,`Elako`,`Elakotz`,`Enean`,`Ba`,`BaToka`,`BaNoka`,`BaEn`,`BaEla`,`BaEna`,`BaEnik`,`BaElarik`,`BaElakoan`,`BaElako`,`BaElakotz`,`BaEnean`,`Bait`,`BaitToka`,`BaitNoka`,`Noiz`,`Sortzea`)
					VALUES ('".$emaitza[Giltza]."','".$emaitza[Euskalkia]."','".$emaitza[Aditza]."','".$emaitza[Modua]."','".$emaitza[Aldia]."','".$emaitza[Forma]."','".$emaitza[Nor]."','".$emaitza[Nori]."','".$emaitza[Nork]."','".$emaitza[Eztabada]."','".$emaitza[Toka]."','".$emaitza[Noka]."','".$emaitza[Xuka]."','".$emaitza[Zuka]."','".$emaitza[En]."','".$emaitza[Ela]."','".$emaitza[Ena]."','".$emaitza[Enik]."','".$emaitza[Elarik]."','".$emaitza[Elakoan]."','".$emaitza[Elako]."','".$emaitza[Elakotz]."','".$emaitza[Enean]."','".$emaitza[Ba]."','".$emaitza[BaToka]."','".$emaitza[BaNoka]."','".$emaitza[BaEn]."','".$emaitza[BaEla]."','".$emaitza[BaEna]."','".$emaitza[BaEnik]."','".$emaitza[BaElarik]."','".$emaitza[BaElakoan]."','".$emaitza[BaElako]."','".$emaitza[BaElakotz]."','".$emaitza[BaEnean]."','".$emaitza[Bait]."','".$emaitza[BaitToka]."','".$emaitza[BaitNoka]."','".$emaitza[Noiz]."','".$emaitza[Sortzea]."')";
					mysql_query($sqladd);
					}
			}
			$galdera3 = "select * from Test ";
			$sqlgaldera3= mysql_query($galdera3) OR die('requête Galdera3 txarra');
	echo "<h3>Izan daiteke...</h3><ul>";
	while($row=mysql_fetch_array($sqlgaldera3)){
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
	mysql_query("DROP TABLE Test");
	if(mysql_num_rows($sqlBilaketaD)>=1) {
		echo "<h3>Ez bada...</h3><ul>";
		while($emaitzaD=mysql_fetch_array($sqlBilaketaD)){
			echo "<li>".$emaitzaD[Aditza]."</li>";}
		echo "</ul>";
	}
}
	// Emaitzak Garbituak
	else if(mysql_num_rows($sqlBilaketaG)>=1) {
		mysql_query("Create TEMPORARY TABLE `Test` LIKE `Aditza`");
		while($sql=mysql_fetch_array($sqlBilaketaG)){
			$galdera2 = "select * from ".$basea." where Giltza ='".$sql[Giltza]."'";
			$sqlgaldera2= mysql_query($galdera2) OR die('requête galdera2 txarra');
			while($emaitza=mysql_fetch_array($sqlgaldera2)){
				$sqladd = "INSERT INTO Test (`Giltza`,`Euskalkia`,`Aditza`,`Modua`,`Aldia`,`Forma`,`Nor`,`Nori`,`Nork`,`Eztabada`,`Toka`,`Noka`,`Xuka`,`Zuka`,`En`,`Ela`,`Ena`,`Enik`,`Elarik`,`Elakoan`,`Elako`,`Elakotz`,`Enean`,`Ba`,`BaToka`,`BaNoka`,`BaEn`,`BaEla`,`BaEna`,`BaEnik`,`BaElarik`,`BaElakoan`,`BaElako`,`BaElakotz`,`BaEnean`,`Bait`,`BaitToka`,`BaitNoka`,`Noiz`,`Sortzea`)
					VALUES ('".$emaitza[Giltza]."','".$emaitza[Euskalkia]."','".$emaitza[Aditza]."','".$emaitza[Modua]."','".$emaitza[Aldia]."','".$emaitza[Forma]."','".$emaitza[Nor]."','".$emaitza[Nori]."','".$emaitza[Nork]."','".$emaitza[Eztabada]."','".$emaitza[Toka]."','".$emaitza[Noka]."','".$emaitza[Xuka]."','".$emaitza[Zuka]."','".$emaitza[En]."','".$emaitza[Ela]."','".$emaitza[Ena]."','".$emaitza[Enik]."','".$emaitza[Elarik]."','".$emaitza[Elakoan]."','".$emaitza[Elako]."','".$emaitza[Elakotz]."','".$emaitza[Enean]."','".$emaitza[Ba]."','".$emaitza[BaToka]."','".$emaitza[BaNoka]."','".$emaitza[BaEn]."','".$emaitza[BaEla]."','".$emaitza[BaEna]."','".$emaitza[BaEnik]."','".$emaitza[BaElarik]."','".$emaitza[BaElakoan]."','".$emaitza[BaElako]."','".$emaitza[BaElakotz]."','".$emaitza[BaEnean]."','".$emaitza[Bait]."','".$emaitza[BaitToka]."','".$emaitza[BaitNoka]."','".$emaitza[Noiz]."','".$emaitza[Sortzea]."')";
					mysql_query($sqladd);
					}
			}
			$galdera3 = "select * from Test ";
			$sqlgaldera3= mysql_query($galdera3) OR die('requête Galdera3 txarra');
			echo "<h3>".$Bilaketa." ez dut aurkitu, baian proposa diezazuket...</h3>";
								
while($row=mysql_fetch_array($sqlgaldera3)){
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

else if(empty($Egina[$id])&&garbitu($Toka) === garbitu($Bilaketa)){
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

else if(empty($Egina[$id])&&garbitu($Noka) === garbitu($Bilaketa)){
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
else if(empty($Egina[$id])&&garbitu($Xuka) === garbitu($Bilaketa)){
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

else if(empty($Egina[$id])&&garbitu($Zuka) === garbitu($Bilaketa)){
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
	if(empty($Egina[$id])&&garbitu($$trat[0]) === garbitu($Bilaketa)){
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
else {echo '<div class="hutsa">Ez da aurkitu</div>';}
}
else {echo '<div class="hutsa">hitz bat bilatu</div>';}
echo '</div>';
?>
