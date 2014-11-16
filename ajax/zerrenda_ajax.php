<?php
include("../inc/db.php");
include('../inc/array.php');
include('../inc/debug.php');
include('../inc/funtzioak.php');
include('../inc/baldintzak.inc.php');

// galdera pettoekin baina desberdina
mysql_query("SET NAMES 'utf8_spanish_ci'");
	$galderaBilaketaD = "select DISTINCT Aditza from ".$basea2." Order by Aditza";
	$sqlBilaketaD= mysql_query($galderaBilaketaD) OR die('requête BilaketaG txarra');
		while($emaitzaD=mysql_fetch_array($sqlBilaketaD)){
			echo "<li id=".$emaitzaD[Aditza].">".$emaitzaD[Aditza]."</li>";}
		echo "</ul>";

echo "<script>
function my_urlencode(s){var o='';var x=0;s=s.toString();var regex= /(^[a-zA-Z0-9_.]*)/;while(x<s.length){var match=regex.exec(s.substr(x));if(match!=null && match.length>1 && match[1]!=''){o += match[1];x+=match[1].length;}else{if(s[x]==' ')o+='+';else{var charCode=s.charCodeAt(x);var hexVal=charCode.toString(16);o+='%'+(hexVal.length<2?'0':'')+hexVal.toUpperCase();}x++;}}return o;}
	$('li').click(function() {
	var ID=$(this).attr('id');
	alert(my_urlencode(ID));
	
			});</script>";
?>
