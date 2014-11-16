$(document).ready(function()
{
	$("#hitzbilatua").change(function()
	{
		var Bildua=$(this).val();
		$("#emaitzak").html('<img src="load.gif" />');
		$("#emaitzak").load("bilaketa_ajax.php?Bilaketa="+Bildua);

	});
$("#hitzbilatua").keyup(function()
	{
		var Bildua=$(this).val();
		$("#emaitzak").html('<img src="load.gif" />');
		$("#emaitzak").load("bilaketa_ajax.php?Bilaketa="+Bildua);

	});
});
