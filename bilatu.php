<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/aditza.css" />
	<link rel="stylesheet" href="css/bilaketa.css" />
	<title>Bilatu - Aditza</title>
</head>
<body>

<div id="searchbar">
 <h1>Zein da aditza hau ?</h1>
	<input id="hitzbilatua" type="text" class="Bilaketa" title="Bilaketa" name="Bilaketa" size="30" value="<? if (!empty($Bilaketa)){echo $Bilaketa;} ?>"/>
	</div>
<?php include('bilaketa_ajax.php');?>
<?php include('footer.php');?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="js/bilatu.js"></script>
<?php if (isset($edit) && $edit == 'bai'){echo '<script type="text/javascript" src="js/tableEdit.js"></script>';}?>
</body>
</html>
