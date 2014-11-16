<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/aditza.css" />
	<link rel="stylesheet" href="css/tableEdit.css" />
	<title>Zerrenda bakarka - Aditza</title>
</head>
<body>

<?php
include('inc/debug.php');
include('inc/funtzioak.php');
include('inc/array.php');
include('inc/db.php');
include('inc/baldintzak.inc.php');
include('inc/galdea.inc.php');
include('inc/galdea2.inc.php');
?>
<header>
	<div class="bando">
		<h1><?php echo $Euskalkia ?></h1>
		<div id="alokutiboa">alokutiboa</div>
		<div id="menderatu">menderatu</div>
	</div>
</header>
<nav>
<div id="menubotoia" class="menubotoia">Menua</div>
<div id="menumenua">
<form name="taula" action="#" method="post">
<?php
echo '
<label><span class="menulabel">Euskalkia</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatEuskalkia = mysql_fetch_object($sqlEuskalkia))
    {echo '<option value="'.$resultatEuskalkia->Euskalkia.'"';
	if(isset($Euskalkia)&&$Euskalkia==$resultatEuskalkia->Euskalkia){echo 'selected="selected"';}
	if(!isset($BadaEuskalkia[$resultatEuskalkia->Euskalkia]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatEuskalkia->Euskalkia.'</option>';}
echo '    </select>
</span>
</label>
';
echo '
<label><span class="menulabel">Aditza</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatAditza = mysql_fetch_object($sqlAditza))
    {echo '<option value="'.$resultatAditza->Aditza.'"';
	if(isset($Aditza)&&$Aditza==$resultatAditza->Aditza){echo 'selected="selected"';}
	if(!isset($BadaAditza[$resultatAditza->Aditza]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatAditza->Aditza.'</option>';}
echo '    </select>
</span>
</label>
';
echo '
<label><span class="menulabel">Modua</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatModua = mysql_fetch_object($sqlModua))
    {echo '<option value="'.$resultatModua->Modua.'"';
	if(isset($Modua)&&$Modua==$resultatModua->Modua){echo 'selected="selected"';}
	if(!isset($BadaModua[$resultatModua->Modua]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatModua->Modua.'</option>';}
echo '    </select>
</span>
</label>
';
echo '
<label><span class="menulabel">Aldia</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatAldia = mysql_fetch_object($sqlAldia))
    {echo '<option value="'.$resultatAldia->Aldia.'"';
	if(isset($Aldia)&&$Aldia==$resultatAldia->Aldia){echo 'selected="selected"';}
	if(!isset($BadaAldia[$resultatAldia->Aldia]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatAldia->Aldia.'</option>';}
echo '    </select>
</span>
</label>
';
echo '
<label><span class="menulabel">Forma</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatForma = mysql_fetch_object($sqlForma))
    {echo '<option value="'.$resultatForma->Forma.'"';
	if(isset($Forma)&&$Forma==$resultatForma->Forma){echo 'selected="selected"';}
	if(!isset($BadaForma[$resultatForma->Forma]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatForma->Forma.'</option>';}
echo '    </select>
</span>
</label>
';
echo '
<label><span class="menulabel">Nor</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatNor = mysql_fetch_object($sqlNor))
    {echo '<option value="'.$resultatNor->Nor.'"';
	if(isset($Nor)&&$Nor==$resultatNor->Nor){echo 'selected="selected"';}
	if(!isset($BadaNor[$resultatNor->Nor]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatNor->Nor.'</option>';}
echo '    </select>
</span>
</label>
';
echo '
<label><span class="menulabel">Nori</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatNori = mysql_fetch_object($sqlNori))
    {echo '<option value="'.$resultatNori->Nori.'"';
	if(isset($Nori)&&$Nori==$resultatNori->Nori){echo 'selected="selected"';}
	if(!isset($BadaNori[$resultatNori->Nori]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatNori->Nori.'</option>';}
echo '    </select>
</span>
</label>
';
echo '
<label><span class="menulabel">Nork</span>
<span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white">';
    while($resultatNork = mysql_fetch_object($sqlNork))
    {echo '<option value="'.$resultatNork->Nork.'"';
	if(isset($Nork)&&$Nork==$resultatNork->Nork){echo 'selected="selected"';}
	if(!isset($BadaNork[$resultatNork->Nork]))
		{echo 'class="bada"';} else {echo 'class="ezda"';}
	echo '>'.$resultatNork->Nork.'</option>';}
echo '    </select>
</span>
</label>
';
?>
<a href="http://www.domeinuak.eus"><img border="0" src="http://www.domeinuak.eus/img/eus130x30.png" style="border: 1px solid #808080" width="130" height="30"></a>
</div>
</nav>


<?php


if (isset($mode) && $mode == 'debug'){echo '<input type="hidden" name="mode" value="debug" />';}
echo '<input type="submit" value="Filtratu" />';
echo '<input type="submit" name="hustu" class="hustu" value="&#x2716;"/>';


/* END opzioak */








?>
<div id="emaitzak">
<table>
<?php


while($row=mysql_fetch_array($sql))
{
$id=$row['Giltza'];
$Euskalkia=$row['Euskalkia'];
$Aditza=$row['Aditza'];
$Modua=$row['Modua'];
$Aldia=$row['Aldia'];
$Forma=$row['Forma'];
$Nor=$row['Nor'];
$Nori=$row['Nori'];
$Nork=$row['Nork'];
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

?>

<tr id="<?php echo $id; ?>" class="edit_tr <?php echo $Euskalkia; ?>">
	<td class="euskalki">
		<span class="spaneuskalki <?php echo $Euskalkia; ?>" id="euskalkia_<?php echo $id; ?>"><?php echo $Euskalkia;?></span>
	</td>

	<td class="lehena">
	<span class="text spanlehena aditza">
		<span class="textAditza <?php echo $Aditza; ?>" id="aditza_<?php echo $id; ?>"><?php echo $Aditza;?></span></span>
	<span class="text spanlehena modua">
		<span class="textModua <?php echo $Modua; ?>" id="modua_<?php echo $id; ?>"><?php echo $Modua;?></span></span>
	<span class="text spanlehena aldia">
		<span class="textAldia <?php echo $Aldia; ?>" id="aldia_<?php echo $id; ?>"><?php echo $Aldia;?></span></span>
	<span class="text spanlehena forma">
		<span class="textForma <?php echo $Forma; ?>" id="forma_<?php echo $id; ?>"><?php echo $Forma;?></span></span>
	</td>

	<td class="nnn">
	<span class="text spannnn nor">
		<span class="textLeg">Nor:</span><span class="textNor <?php echo $Nor; ?>" id="nor_<?php echo $id; ?>"><?php if(isset($Nor) && $Nor!=""){echo $Nor;}else{echo"-";} ?></span></span>
	<span class="text spannnn nori">
		<span class="textLeg">Nori:</span><span class="textNori <?php echo $Nori; ?>" id="nori_<?php echo $id; ?>"><?php if(isset($Nori) && $Nori!=""){echo $Nori;}else{echo"-";} ?></span></span>
	<span class="text spannnn nork">
		<span class="textLeg">Nork:</span><span class="textNork <?php echo $Nork; ?>" id="nork_<?php echo $id; ?>"><?php if(isset($Nork) && $Nork!=""){echo $Nork;}else{echo"-";} ?></span></span>
	</td>

	<td class="nagusia">
	<span class="text spannagusia eztabada" id="eztabada_<?php echo $id; ?>"><?php echo $Eztabada; ?></span>
		<input type="text" value="<?php echo $Eztabada; ?>" class="editbox" id="eztabada_input_<?php echo $id; ?>" />
	<ul class="ulalok">
	<li class="text spannagusia toka">
		<span class="textLeg">toka:</span>
		<span id="toka_<?php echo $id; ?>" class="text textToka <?php echo $Toka; ?>"><?php if(!empty($Toka)){echo $Toka;} ?></span>
		<input type="text" value="<?php echo $Toka; ?>" class="editbox" id="toka_input_<?php echo $id; ?>" />
	</li>
	<li class="text spannagusia noka">
		<span class="textLeg">noka:</span><span id="noka_<?php echo $id; ?>" class="text textNoka <?php echo $Noka; ?>"><?php if(!empty($Noka)){echo $Noka;} ?></span>
		<input type="text" value="<?php echo $Noka; ?>" class="editbox" id="noka_input_<?php echo $id; ?>" />
	</li>
	<li class="text spannagusia xuka">
		<span class="textLeg">xuka:</span><span id="xuka_<?php echo $id; ?>" class="text textXuka <?php echo $Xuka; ?>"><?php if(!empty($Xuka)){echo $Xuka;}?></span>
		<input type="text" value="<?php echo $Xuka; ?>" class="editbox" id="xuka_input_<?php echo $id; ?>" />
	</li>
	<li class="text spannagusia zuka">
		<span class="textLeg">zuka:</span><span id="zuka_<?php echo $id; ?>" class="text textZuka <?php echo $Zuka; ?>"><?php if(!empty($Zuka)){echo $Zuka;}?></span>
		<input type="text" value="<?php echo $Zuka; ?>" class="editbox" id="zuka_input_<?php echo $id; ?>" />
	</li>
	</ul>
	</td>

<!-- Bait -->
	<td class="baitmende">
	<span class="spanba">
		<span 	id="ba_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Ba)){$Ba2= ba($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Ba2 = $Ba;}echo $Ba2; ?>
			<?php if($Ba2 != ba($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.ba($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
		<input 	type="text" 
			value="<?php echo $Ba2; ?>" 
			class="editbox boxmende" 
			id="ba_input_<?php echo $id; ?>" />
		<span class="text mende">
		<span class="textLeg">toka:</span>
		<span 	id="batoka_<?php echo $id; ?>" 
			class="text textToka toka">
			<?php if(empty($BaToka)){$BaToka2= ba($Toka,$Modua,$Aldia,$Euskalkia);}else{$BaToka2 = $BaToka;}echo $BaToka2; ?>
			<?php if($BaToka2 != ba($Toka,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.ba($Toka,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
		<input 	type="text" 
			value="<?php echo $BaToka2; ?>" 
			class="editbox boxmende" 
			id="batoka_input_<?php echo $id; ?>" />
		</span>
		<span class="text mende">
		<span class="textLeg">noka:</span>
		<span 	id="banoka_<?php echo $id; ?>" 
			class="text textNoka noka">
			<?php if(empty($BaNoka)){$BaNoka2= ba($Noka,$Modua,$Aldia,$Euskalkia);}else{$BaNoka2 = $BaNoka;}echo $BaNoka2; ?>
			<?php if($BaNoka2 != ba($Noka,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.ba($Noka,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
		<input 	type="text" 
			value="<?php echo $BaNoka2; ?>" 
			class="editbox boxmende" 
			id="banoka_input_<?php echo $id; ?>" />
		</span>
	</span>
	<span class="spanbait">
		<span 	id="bait_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Bait)){$Bait2= bait($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Bait2 = $Bait;}echo $Bait2; ?>
			<?php if($Bait2 != bait($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.bait($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
		<input 	type="text" 
			value="<?php echo $Bait2; ?>" 
			class="editbox boxmende" 
			id="bait_input_<?php echo $id; ?>" />
		<span class="text mende">
		<span class="textLeg">toka:</span><span 	id="baittoka_<?php echo $id; ?>" 
			class="text textToka toka">
			<?php if(empty($BaitToka)){$BaitToka2= bait($Toka,$Modua,$Aldia,$Euskalkia);}else{$BaitToka2 = $BaitToka;}echo $BaitToka2; ?>
			<?php if($BaitToka2 != bait($Toka,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.bait($Toka,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
		<input 	type="text" 
			value="<?php echo $BaitToka2; ?>" 
			class="editbox boxmende" 
			id="baittoka_input_<?php echo $id; ?>" />
		</span>
		<span class="text mende">
		<span class="textLeg">noka:</span><span 	id="baitnoka_<?php echo $id; ?>" 
			class="text textNoka noka">
			<?php if(empty($BaitNoka)){$BaitNoka2= bait($Noka,$Modua,$Aldia,$Euskalkia);}else{$BaitNoka2 = $BaitNoka;}echo $BaitNoka2; ?>
			<?php if($BaitNoka2 != bait($Noka,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.bait($Noka,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
		<input 	type="text" 
			value="<?php echo $BaitNoka2; ?>" 
			class="editbox boxmende" 
			id="baitnoka_input_<?php echo $id; ?>" />
		</span>
	</span>
	</td>

	
	<td class="menderagailuak">
	<!-- En -->
	<span 	id="en_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($En)){$En2= en($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$En2 = $En;}echo $En2; ?>
			<?php if($En2 != en($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.en($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $En2; ?>" 
			class="editbox boxmende" 
			id="en_input_<?php echo $id; ?>" />
	<!-- Ena -->
	<span 	id="ena_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Ena)){$Ena2= ena($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Ena2 = $Ena;}echo $Ena2; ?>
			<?php if($Ena2 != ena($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.ena($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Ena2; ?>" 
			class="editbox boxmende" 
			id="ena_input_<?php echo $id; ?>" />
	<!-- Enik -->
	<span 	id="enik_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Enik)){$Enik2= enik($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Enik2 = $Enik;}echo $Enik2; ?>
			<?php if($Enik2 != enik($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.enik($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Enik2; ?>" 
			class="editbox boxmende" 
			id="enik_input_<?php echo $id; ?>" />
	<!-- Enean -->
	<span 	id="enean_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Enean)){$Enean2= enean($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Enean2 = $Enean;}echo $Enean2; ?>
			<?php if($Enean2 != enean($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.enean($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Enean2; ?>" 
			class="editbox boxmende" 
			id="enean_input_<?php echo $id; ?>" />
	<!-- Ela -->
	<span 	id="ela_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Ela)){$Ela2= ela($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Ela2 = $Ela;}echo $Ela2; ?>
			<?php if($Ela2 != ela($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.ela($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Ela2; ?>" 
			class="editbox boxmende" 
			id="ela_input_<?php echo $id; ?>" />
	<!-- Elarik -->
	<span 	id="elarik_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Elarik)){$Elarik2= elarik($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Elarik2 = $Elarik;}echo $Elarik2; ?>
			<?php if($Elarik2 != elarik($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.elarik($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Elarik2; ?>" 
			class="editbox boxmende" 
			id="elarik_input_<?php echo $id; ?>" />
	<!-- Elako -->
	<span 	id="elako_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Elako)){$Elako2= elako($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Elako2 = $Elako;}echo $Elako2; ?>
			<?php if($Elako2 != elako($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.elako($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Elako2; ?>" 
			class="editbox boxmende" 
			id="elako_input_<?php echo $id; ?>" />
	<!-- Elakotz -->
	<span 	id="elakotz_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Elakotz)){$Elakotz2= elakotz($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Elakotz2 = $Elakotz;}echo $Elakotz2; ?>
			<?php if($Elakotz2 != elakotz($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.elakotz($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Elakotz2; ?>" 
			class="editbox boxmende" 
			id="elakotz_input_<?php echo $id; ?>" />
	<!-- Elakoan -->
	<span 	id="elakoan_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($Elakoan)){$Elakoan2= elakoan($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$Elakoan2 = $Elakoan;}echo $Elakoan2; ?>
			<?php if($Elakoan2 != elakoan($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.elakoan($Eztabada).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $Elakoan2; ?>" 
			class="editbox boxmende" 
			id="elakoan_input_<?php echo $id; ?>" />
	</td>
	<!-- ba Taula-->
	<td class="bamende">

	<!-- BaEn -->
	<span 	id="baen_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaEn)){$BaEn2= baen($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaEn2 = $BaEn;}echo $BaEn2; ?>
			<?php if($BaEn2 != baen($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baen($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaEn2; ?>" 
			class="editbox boxmende" 
			id="baen_input_<?php echo $id; ?>" />
	<!-- BaEna -->
	<span 	id="baena_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaEna)){$BaEna2= baena($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaEna2 = $BaEna;}echo $BaEna2; ?>
			<?php if($BaEna2 != baena($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baena($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaEna2; ?>" 
			class="editbox boxmende" 
			id="baena_input_<?php echo $id; ?>" />
	<!-- BaEnik -->
	<span 	id="baenik_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaEnik)){$BaEnik2= baenik($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaEnik2 = $BaEnik;}echo $BaEnik2; ?>
			<?php if($BaEnik2 != baenik($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baenik($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaEnik2; ?>" 
			class="editbox boxmende" 
			id="baenik_input_<?php echo $id; ?>" />
	<!-- BaEnean -->
	<span 	id="baenean_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaEnean)){$BaEnean2= baenean($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaEnean2 = $BaEnean;}echo $BaEnean2; ?>
			<?php if($BaEnean2 != baenean($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baenean($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaEnean2; ?>" 
			class="editbox boxmende" 
			id="baenean_input_<?php echo $id; ?>" />
	<!-- BaEla -->
	<span 	id="baela_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaEla)){$BaEla2= baela($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaEla2 = $BaEla;}echo $BaEla2; ?>
			<?php if($BaEla2 != baela($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baela($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaEla2; ?>" 
			class="editbox boxmende" 
			id="baela_input_<?php echo $id; ?>" />
	<!-- BaElarik -->
	<span 	id="baelarik_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaElarik)){$BaElarik2= baelarik($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaElarik2 = $BaElarik;}echo $BaElarik2; ?>
			<?php if($BaElarik2 != baelarik($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baelarik($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaElarik2; ?>" 
			class="editbox boxmende" 
			id="baelarik_input_<?php echo $id; ?>" />
	<!-- BaElako -->
	<span 	id="baelako_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaElako)){$BaElako2= baelako($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaElako2 = $BaElako;}echo $BaElako2; ?>
			<?php if($BaElako2 != baelako($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baelako($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaElako2; ?>" 
			class="editbox boxmende" 
			id="baelako_input_<?php echo $id; ?>" />
	<!-- BaElakotz -->
	<span 	id="baelakotz_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaElakotz)){$BaElakotz2= baelakotz($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaElakotz2 = $BaElakotz;}echo $BaElakotz2; ?>
			<?php if($BaElakotz2 != baelakotz($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baelakotz($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaElakotz2; ?>" 
			class="editbox boxmende" 
			id="baelakotz_input_<?php echo $id; ?>" />
	<!-- BaElakoan -->
	<span 	id="baelakoan_<?php echo $id; ?>" 
			class="text mende">
			<?php if(empty($BaElakoan)){$BaElakoan2= baelakoan($Eztabada,$Modua,$Aldia,$Euskalkia);}else{$BaElakoan2 = $BaElakoan;}echo $BaElakoan2; ?>
			<?php if($BaElakoan2 != baelakoan($Eztabada,$Modua,$Aldia,$Euskalkia)){echo '<span class="gomendioa">'.baelakoan($Eztabada,$Modua,$Aldia,$Euskalkia).'</span>';}?>
			</span>
	<input 	type="text" 
			value="<?php echo $BaElakoan2; ?>" 
			class="editbox boxmende" 
			id="baelakoan_input_<?php echo $id; ?>" />
	</td>

	
</tr>
<?php
}
?>
</table>
<?
$zenbatOrotara = mysql_num_rows($emaitza);
if($zenbatOrotara>$Muga) 
	{
		if ($Mugazero>$Muga)
			{$mugaaitzin = $Mugazero - $Muga; $zenbataitzin = $Muga;} 
			else {$mugaaitzin = 0; $zenbataitzin = $Mugazero;}
		if (($Mugazero+$Muga)>$zenbatOrotara)
			{$mugaondotik = $zenbatOrotara; $zenbatondotik = $zenbatOrotara - $Mugazero;}
			else {$mugaondotik = $Mugazero + $Muga; $zenbatondotik = $Muga;}
		echo '<div class="emaitzagehiago"><p>'.$zenbatOrotara.' lerroetarik '.$Muga.' ageri ('.$Mugazero.'-'.$Mugabi.').</p>
					<ul>';

			if ($Mugazero == 0)
				{echo '<li>&nbsp;</li>';}
				else {echo '<li class="lizerora">
    	          <label for="zerora" class="hainbat zerora"><input id="zerora" name="Mugazero" type="radio" value="0" onClick="this.form.submit()"/> <<<< hastapena (0-'.$Muga.')/'.$zenbatOrotara.' </label>
				</li>';}
			
			if ($Mugazero == 0) 
				{echo '<li>&nbsp;</li>';}
				else {echo '<li class="liaitzin">
    	          	<label for="aitzin" class="hainbat guttiago"><input id="aitzin" name="Mugazero" type="radio" value="'.$mugaaitzin.'" onClick="this.form.submit()"/> << aitzineko '.$zenbataitzin.'ak </label>
					</li>';}

			if ($mugaondotik>=$zenbatOrotara)
				{echo '<li>&nbsp;</li>';}
				else {echo '<li class="liondotik">
        		      <label for="ondotik" class="hainbat gehiago"><input id="ondotik" name="Mugazero" type="radio" value="'.$mugaondotik.'" onClick="this.form.submit()"/>ondoko '.$zenbatondotik.'ak >> </label>
        		    </li>';}

			if ($mugaondotik>=$zenbatOrotara)
				{echo '<li>&nbsp;</li>';}
				else {echo '<li class="libukaerara">
        	      <label for="bukaerara" class="hainbat bukaerara"><input id="bukaerara" name="Mugazero" type="radio" value="'.($zenbatOrotara - $Muga).'" onClick="this.form.submit()"/>bukaera ('.($zenbatOrotara - $Muga).'-'.$zenbatOrotara.')/'.$zenbatOrotara.' >>>> </label>
        	    </li>';}

			echo '</ul></div>';
			}
echo '</form>';
echo '</div>';
?>
<?php include('footer.php');?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="js/bakarka.js"></script>
<?php if(isset($edit)&&$edit="bai"){echo '<script type="text/javascript" src="js/tableEdit.js"></script>';}?>
</body>
</html>
