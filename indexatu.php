<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8_spanish2_ci" />
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/aditza.css" />
	<link rel="stylesheet" href="css/bilaketa.css" />
	<title>Zerrendatu - Aditza</title>
</head>
<body>

<div id="searchbar">
 <h1>Zerrenda</h1>
	</div>
	<?php
include("inc/db.php");
include('inc/array.php');
include('inc/debug.php');
include('inc/funtzioak.php');
include('inc/baldintzak.inc.php');

// galdera pettoekin baina desberdina
	$galderaBilaketaD = "select DISTINCT Aditza from ".$basea2." Order by Aditza";
	$sqlBilaketaD= mysql_query($galderaBilaketaD) OR die('requête BilaketaG txarra');
	echo "<h3>".number_format(mysql_num_rows($sqlBilaketaD), 0, ',', ' ')." forma desberdin zerrendatuak dira.</h3>";
		$j = mysql_num_rows($sqlBilaketaD);
	$i=0;
	echo "<h3>Hona zerrenda...</h3><ul>";
	echo '<div id="indexatuzertan"></div>';
	echo '<div id="garbitu">Garbitu</div>';
	echo '<div id="menderatu">Menderatu</div>';
	echo '<div id="indexatu">Indexatu</div>';
	echo '<div id="zerrenda">Zerrendatu</div>';
	include('footer.php');?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="js/indexatu.js"></script>
</body>
</html>
