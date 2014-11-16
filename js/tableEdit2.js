$(document).ready(function()
{
$(".edit_span").click(function()
{
var ID=$(this).attr('id');
$("#eztabada_"+ID).hide();
$("#toka_"+ID).hide();
$("#noka_"+ID).hide();
$("#xuka_"+ID).hide();
$("#zuka_"+ID).hide();

$("#eztabada_input_"+ID).show();
$("#toka_input_"+ID).css("display","block");
$("#noka_input_"+ID).css("display","block");
$("#xuka_input_"+ID).css("display","block");
$("#zuka_input_"+ID).css("display","block");
$("#LegToka_"+ID).show();
$("#LegNoka_"+ID).show();
$("#LegXuka_"+ID).show();
$("#LegZuka_"+ID).show();
$("#delete_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var eztabada=$("#eztabada_input_"+ID).val();
var toka=$("#toka_input_"+ID).val();
var noka=$("#noka_input_"+ID).val();
var xuka=$("#xuka_input_"+ID).val();
var zuka=$("#zuka_input_"+ID).val();

var dataString = 'Giltza='+ ID 
		+'&Eztabada='+eztabada
		+'&Toka='+toka
		+'&Noka='+noka
		+'&Xuka='+xuka
		+'&Zuka='+zuka
		;
$("#eztabada_"+ID).html('<img src="load.gif" />');
$("#toka_"+ID).html('<img src="load.gif" />');
$("#noka_"+ID).html('<img src="load.gif" />');
$("#xuka_"+ID).html('<img src="load.gif" />');
$("#zuka_"+ID).html('<img src="load.gif" />');

if((eztabada+toka+noka).length>0)
{

$.ajax({
type: "POST",
url: "table_edit_ajax2.php",
data: dataString,
cache: false,
success: function(html)
{
$("#eztabada_"+ID).html(eztabada);
$("#toka_"+ID).html(toka);
$("#noka_"+ID).html(noka);
$("#xuka_"+ID).html(xuka);
$("#zuka_"+ID).html(zuka);
}
});
}
else
{
alert('Zerbait idatzi.');
}

});

// Edit input box click action
$(".editbox").mouseup(function()
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".delete").hide();
$(".text").show();
$(".textLeg").hide();
});

$(".delete").click(function()
{
	var IDluze=$(this).attr('id');
	ID = IDluze.substr(7,IDluze.length);
	var eztabada=$("#eztabada_input_"+ID).val();
	var toka=$("#toka_input_"+ID).val();
	var noka=$("#noka_input_"+ID).val();
	var toka=$("#xuka_input_"+ID).val();
	var noka=$("#zuka_input_"+ID).val();
	var dataStringDelete = 'Giltza='+ ID 

	if (confirm(ID+' ezabatu nahi duzula segur zira ? ('+eztabada+' '+toka+' '+noka+')'))
		{
		$.ajax({
			type: "POST",
			url: "table_delete_ajax.php",
			data: dataStringDelete,
			cache: false,
			success: function(html)
					{
					$(".editbox").hide();
					$(".textLeg").hide();
					$(".delete").hide();
					}
			});
		};
});
});
