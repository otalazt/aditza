$(document).ready(function()
{
	$("#garbitu").click(function() {
		$("#garbitu").html('<img src="load.gif" /><br /><p>Garbitzen ari...</p>');
		$("#garbitu").load("ajax/garbitu_ajax.php");
	});
	$("#zerrenda").click(function() {
		$("#zerrenda").html('<img src="load.gif" /><br /><p> Kontuz, Biziki luzea izan daiteke</p>');
		$("#zerrenda").load("ajax/zerrenda_ajax.php");
	});
	$("#indexatu").click(function() {
		$("#indexatu").html('<img src="load.gif" /><br /><p> Berindexatzen ari..</p>');
		$("#indexatu").load("ajax/indexatu_ajax.php");
	});
	$("#menderatu").click(function () {
		$("#menderatu").html('<img src="load.gif" /><br /><p> menderatzen ari..</p>');
		$("#menderatu").load("ajax/menderatu_ajax.php");
	});
});

