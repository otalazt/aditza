
$(document).ready(function()
{
$(".gehi").click(function()
{
var ID=$(this).attr('id');
$("#gehigehi_"+ID).hide();
$("#gehiinput_"+ID).show();
$("#euskalkia_input_"+ID).show();
$("#aditza_input_"+ID).show();
$("#modua_input_"+ID).show();
$("#aldia_input_"+ID).show();
$("#aditza_input_"+ID).show();
$("#forma_input_"+ID).show();
$("#nor_input_"+ID).show();
$("#nori_input_"+ID).show();
$("#nork_input_"+ID).show();
$("#eztabada_input_"+ID).show();
$("#toka_input_"+ID).show();
$("#noka_input_"+ID).show();
$("#xuka_input_"+ID).show();
$("#zuka_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var euskalkia=$("#euskalkia_input_"+ID).val();
var aditza=$("#aditza_input_"+ID).val();
var modua=$("#modua_input_"+ID).val();
var aldia=$("#aldia_input_"+ID).val();
var forma=$("#forma_input_"+ID).val();
var nor=$("#nor_input_"+ID).val();
var nori=$("#nori_input_"+ID).val();
var nork=$("#nork_input_"+ID).val();
var eztabada=$("#eztabada_input_"+ID).val();
var toka=$("#toka_input_"+ID).val();
var noka=$("#noka_input_"+ID).val();
var xuka=$("#xuka_input_"+ID).val();
var zuka=$("#zuka_input_"+ID).val();

var dataString = 
		'&Euskalkia='+euskalkia
		+'&Aditza='+aditza
		+'&Modua='+modua
		+'&Aldia='+aldia
		+'&Forma='+forma
		+'&Nor='+nor
		+'&Nori='+nori
		+'&Nork='+nork
		+'&Eztabada='+eztabada
		+'&Toka='+toka
		+'&Noka='+noka
		+'&Xuka='+xuka
		+'&Zuka='+zuka
		;
$("#eztabada_"+ID).html('<img src="load.gif" />');
$("#toka_"+ID).html('<img src="load.gif" />');
$("#noka_"+ID).html('<img src="load.gif" />');


if((eztabada+toka+noka).length>0)
{

$.ajax({
type: "POST",
url: "table_add_ajax.php",
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
$(".gehiinput").hide();
$(".gehigehi").show();
});

});
