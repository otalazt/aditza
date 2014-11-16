<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/aditza.css" />
	<link rel="stylesheet" href="css/tableEdit.css" />
	<title>Taulak - Aditza</title>
</head>
<body>

<?php
include('inc/debug.php');
include('inc/funtzioak.php');
include('inc/array.php');
include('inc/db.php');
include('inc/baldintzak.inc.php');
include('inc/galdea.inc.php');
include('inc/aside.inc.php');
include('inc/header.inc.php');


?>
<div id="container">
<table class="taulahandia">
<!-- Nor -->
	<tr class="trtit" id="nor"><td colspan="9"><h2>Nor</h2></td></tr>
		<?php $Forma="Nor" ?>
	<tr>
		<th>&nbsp;</th>
		<th>ni</th>
		<th>hi (k)</th>
		<th>hi (n)</th>
		<th>hura</th>
		<th>gu</th>
		<th>zu</th>
		<th>zuek</th>
		<th>haiek</th>
	</tr>
	<tr>
		<th class="eskuin">&nbsp;</th>
		<td class="edit_td"><?php $nnn= array("ni","","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","");include('inc/td.inc.php');?></td>
	</tr>

<!-- Nor-Nori -->
	<tr class="trtit" id="nornori"><td colspan="9"><h2>Nor-Nori</h2></td></tr>
		<?php $Forma="Nor-Nori" ?>
	<tr>
		<th>&nbsp;</th>
		<th>ni</th>
		<th>hi (k)</th>
		<th>hi (n)</th>
		<th>hura</th>
		<th>gu</th>
		<th>zu</th>
		<th>zuek</th>
		<th>haiek</th>
	</tr>
	<tr>
		<th class="eskuin">Niri</th>
		<td class="edit_td"><?php $nnn= array("ni","niri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","niri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","niri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","niri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","niri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","niri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","niri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","niri","");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hiri (k)</th>
		<td class="edit_td"><?php $nnn= array("ni","hiri (k)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","hiri (k)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","hiri (k)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","hiri (k)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","hiri (k)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","hiri (k)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hiri (n)</th>
		<td class="edit_td"><?php $nnn= array("ni","hiri (n)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","hiri (n)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","hiri (n)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","hiri (n)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","hiri (n)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","hiri (n)","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hari</th>
		<td class="edit_td"><?php $nnn= array("ni","hari","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","hari","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","hari","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","hari","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","hari","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","hari","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Guri</th>
		<td class="edit_td"><?php $nnn= array("ni","guri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","guri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","guri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","guri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","guri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","guri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuri</th>
		<td class="edit_td"><?php $nnn= array("ni","zuri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","zuri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","zuri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","zuri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","zuri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","zuri","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuei</th>
		<td class="edit_td"><?php $nnn= array("ni","zuei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","zuei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","zuei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","zuei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","zuei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","zuei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Haiei</th>
		<td class="edit_td"><?php $nnn= array("ni","haiei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","haiei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","haiei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","haiei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","haiei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","haiei","");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","");include('inc/td.inc.php');?></td>
	</tr>

<!-- Nor-Nork -->
	<tr class="trtit" id="nornork"><td colspan="9"><h2>Nor-Nork</h2></td></tr>
		<?php $Forma="Nor-Nork" ?>
	<tr>
		<th>&nbsp;</th>
		<th>ni</th>
		<th>hi (k)</th>
		<th>hi (n)</th>
		<th>hura</th>
		<th>gu</th>
		<th>zu</th>
		<th>zuek</th>
		<th>haiek</th>
	</tr>
	<tr>
		<th class="eskuin">Nik</th>
		<td class="edit_td"><?php $nnn= array("ni","","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","nik");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hik (k)</th>
		<td class="edit_td"><?php $nnn= array("ni","","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","hik (k)");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hik (n)</th>
		<td class="edit_td"><?php $nnn= array("ni","","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","hik (n)");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hark</th>
		<td class="edit_td"><?php $nnn= array("ni","","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","hark");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Guk</th>
		<td class="edit_td"><?php $nnn= array("ni","","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","guk");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuk</th>
		<td class="edit_td"><?php $nnn= array("ni","","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","zuk");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuek</th>
		<td class="edit_td"><?php $nnn= array("ni","","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","zuek");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Haiek</th>
		<td class="edit_td"><?php $nnn= array("ni","","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (k)","","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hi (n)","","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("gu","","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zu","","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("zuek","","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","","haiek");include('inc/td.inc.php');?></td>
	</tr>

<!-- Nor(Hura)- Nori-Nork -->
	<tr class="trtit" id="nornorinork1"><td colspan="9"><h2>Nor(Hura)-Nori-Nork</h2></td></tr>
		<?php $Forma="Nor-Nori-Nork" ?>
	<tr>
		<th>&nbsp;</th>
		<th>niri</th>
		<th>hiri (k)</th>
		<th>hiri (n)</th>
		<th>hari</th>
		<th>guri</th>
		<th>zuri</th>
		<th>zuei</th>
		<th>haiei</th>
	</tr>
	<tr>
		<th class="eskuin">Nik</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","nik");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hik (k)</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","hik (k)");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hik (n)</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","hik (n)");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hark</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","hark");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Guk</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","guk");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuk</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","zuk");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuek</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","niri (n)","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","zuek");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Haiek</th>
		<td class="edit_td"><?php $nnn= array("hura","niri","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (k)","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hiri (n)","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","hari","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","guri","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuri","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","zuei","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("hura","haiei","haiek");include('inc/td.inc.php');?></td>
	</tr>

<!-- Nor(Haiek)- Nori-Nork -->
	<tr class="trtit" id="nornorinork2"><td colspan="9"><h2>Nor(Haiek)-Nori-Nork</h2></td></tr>
		<?php $Forma="Nor-Nori-Nork" ?>
	<tr>
		<th>&nbsp;</th>
		<th>niri</th>
		<th>hiri (k)</th>
		<th>hiri (n)</th>
		<th>hari</th>
		<th>guri</th>
		<th>zuri</th>
		<th>zuei</th>
		<th>haiei</th>
	</tr>
	<tr>
		<th class="eskuin">Nik</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","nik");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","nik");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hik (k)</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","hik (k)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","hik (k)");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hik (n)</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","hik (n)");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","hik (n)");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Hark</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","hark");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","hark");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Guk</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","guk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","guk");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuk</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","zuk");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","zuk");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Zuek</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","niri (n)","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","zuek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","zuek");include('inc/td.inc.php');?></td>
	</tr>
	<tr>
		<th class="eskuin">Haiek</th>
		<td class="edit_td"><?php $nnn= array("haiek","niri","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (k)","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hiri (n)","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","hari","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","guri","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuri","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","zuei","haiek");include('inc/td.inc.php');?></td>
		<td class="edit_td"><?php $nnn= array("haiek","haiei","haiek");include('inc/td.inc.php');?></td>
	</tr>
	</table>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<?php if (isset($edit) && ($edit == 'bai' || $edit == 'edit')){echo '<script type="text/javascript" src="js/tableEdit2.js"></script>';}?>
<?php if (isset($edit) && $edit == 'bai'){echo '<script type="text/javascript" src="js/tableAdd2.js"></script>';}?>
<?php if (isset($edit) && $edit == 'edit'){echo '<script type="text/javascript" src="js/tableAdd.js"></script>';}?>

    <script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
    <script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/lancement.js"></script><!-- permet le lancement de la fonction de scroll -->
</body>
</html>
