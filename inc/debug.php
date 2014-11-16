<?php
if ( isset($_GET['mode']) && $_GET['mode'] == 'debug') {
	$mode = 'debug';}
if (isset ($_POST['mode']) && $_POST['mode'] == 'debug'){
	$mode = 'debug';}
if (isset($mode) && $mode == 'debug'){
	ini_set('display_errors', true);
	error_reporting(E_ALL);
echo '<div class="debug">Debugatzen...<br />';
foreach($_POST as $key => $val) echo '$_POST["'.$key.'"]='.$val.'<br />';
foreach($_GET as $key => $val) echo '$_GET["'.$key.'"]='.$val.'<br />';
echo '</div>';}
?>
