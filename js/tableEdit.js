
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#eztabada_"+ID).hide();
$("#toka_"+ID).hide();
$("#noka_"+ID).hide();
$("#xuka_"+ID).hide();
$("#zuka_"+ID).hide();
$("#en_"+ID).hide();
$("#ela_"+ID).hide();
$("#ena_"+ID).hide();
$("#enik_"+ID).hide();
$("#elarik_"+ID).hide();
$("#elakoan_"+ID).hide();
$("#elako_"+ID).hide();
$("#elakotz_"+ID).hide();
$("#enean_"+ID).hide();
$("#ba_"+ID).hide();
$("#batoka_"+ID).hide();
$("#banoka_"+ID).hide();
$("#baen_"+ID).hide();
$("#baela_"+ID).hide();
$("#baena_"+ID).hide();
$("#baenik_"+ID).hide();
$("#baelarik_"+ID).hide();
$("#baelakoan_"+ID).hide();
$("#baelako_"+ID).hide();
$("#baelakotz_"+ID).hide();
$("#baenean_"+ID).hide();
$("#bait_"+ID).hide();
$("#baittoka_"+ID).hide();
$("#baitnoka_"+ID).hide();

$("#eztabada_input_"+ID).show();
$("#toka_input_"+ID).show();
$("#noka_input_"+ID).show();
$("#xuka_input_"+ID).show();
$("#zuka_input_"+ID).show();
$("#en_input_"+ID).show();
$("#ela_input_"+ID).show();
$("#ena_input_"+ID).show();
$("#enik_input_"+ID).show();
$("#elarik_input_"+ID).show();
$("#elakoan_input_"+ID).show();
$("#elako_input_"+ID).show();
$("#elakotz_input_"+ID).show();
$("#enean_input_"+ID).show();
$("#ba_input_"+ID).show();
$("#batoka_input_"+ID).show();
$("#banoka_input_"+ID).show();
$("#baen_input_"+ID).show();
$("#baela_input_"+ID).show();
$("#baena_input_"+ID).show();
$("#baenik_input_"+ID).show();
$("#baelarik_input_"+ID).show();
$("#baelakoan_input_"+ID).show();
$("#baelako_input_"+ID).show();
$("#baelakotz_input_"+ID).show();
$("#baenean_input_"+ID).show();
$("#bait_input_"+ID).show();
$("#baittoka_input_"+ID).show();
$("#baitnoka_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var euskalkia=$("#euskalkia_"+ID).text();
var aditza=$("#aditza_"+ID).text();
var modua=$("#modua_"+ID).text();
var aldia=$("#aldia_"+ID).text();
var forma=$("#forma_"+ID).text();
var nor=$("#nor_"+ID).text();
var nori=$("#nori_"+ID).text();
var nork=$("#nork_"+ID).text();
var eztabada=$("#eztabada_input_"+ID).val();
var toka=$("#toka_input_"+ID).val();
var noka=$("#noka_input_"+ID).val();
var xuka=$("#xuka_input_"+ID).val();
var zuka=$("#zuka_input_"+ID).val();
var en=$("#en_input_"+ID).val();
var ela=$("#ela_input_"+ID).val();
var ena=$("#ena_input_"+ID).val();
var enik=$("#enik_input_"+ID).val();
var elarik=$("#elarik_input_"+ID).val();
var elakoan=$("#elakoan_input_"+ID).val();
var elako=$("#elako_input_"+ID).val();
var elakotz=$("#elakotz_input_"+ID).val();
var enean=$("#enean_input_"+ID).val();
var ba=$("#ba_input_"+ID).val();
var batoka=$("#batoka_input_"+ID).val();
var banoka=$("#banoka_input_"+ID).val();
var baen=$("#baen_input_"+ID).val();
var baela=$("#baela_input_"+ID).val();
var baena=$("#baena_input_"+ID).val();
var baenik=$("#baenik_input_"+ID).val();
var baelarik=$("#baelarik_input_"+ID).val();
var baelakoan=$("#baelakoan_input_"+ID).val();
var baelako=$("#baelako_input_"+ID).val();
var baelakotz=$("#baelakotz_input_"+ID).val();
var baenean=$("#baenean_input_"+ID).val();
var bait=$("#bait_input_"+ID).val();
var baittoka=$("#baittoka_input_"+ID).val();
var baitnoka=$("#baitnoka_input_"+ID).val();

var dataString = 'id='+ ID 
		+'&Euskalkia='+euskalkia
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
		+'&En='+en
		+'&Ela='+ela
		+'&Ena='+ena
		+'&Enik='+enik
		+'&Elarik='+elarik
		+'&Elakoan='+elakoan
		+'&Elako='+elako
		+'&Elakotz='+elakotz
		+'&Enean='+enean
		+'&Ba='+ba
		+'&BaToka='+batoka
		+'&BaNoka='+banoka
		+'&BaEn='+baen
		+'&BaEla='+baela
		+'&BaEna='+baena
		+'&BaEnik='+baenik
		+'&BaElarik='+baelarik
		+'&BaElakoan='+baelakoan
		+'&BaElako='+baelako
		+'&BaElakotz='+baelakotz
		+'&BaEnean='+baenean
		+'&Bait='+bait
		+'&BaitToka='+baittoka
		+'&BaitNoka='+baitnoka
		;
$("#eztabada_"+ID).html('<img src="load.gif" />');
$("#toka_"+ID).html('<img src="load.gif" />');
$("#noka_"+ID).html('<img src="load.gif" />');
$("#xuka_"+ID).html('<img src="load.gif" />');
$("#zuka_"+ID).html('<img src="load.gif" />');
$("#en_"+ID).html('<img src="load.gif" />');
$("#ela_"+ID).html('<img src="load.gif" />');
$("#ena_"+ID).html('<img src="load.gif" />');
$("#enik_"+ID).html('<img src="load.gif" />');
$("#elarik_"+ID).html('<img src="load.gif" />');
$("#elakoan_"+ID).html('<img src="load.gif" />');
$("#elako_"+ID).html('<img src="load.gif" />');
$("#elakotz_"+ID).html('<img src="load.gif" />');
$("#enean_"+ID).html('<img src="load.gif" />');
$("#ba_"+ID).html('<img src="load.gif" />');
$("#batoka_"+ID).html('<img src="load.gif" />');
$("#banoka_"+ID).html('<img src="load.gif" />');
$("#baen_"+ID).html('<img src="load.gif" />');
$("#baela_"+ID).html('<img src="load.gif" />');
$("#baena_"+ID).html('<img src="load.gif" />');
$("#baenik_"+ID).html('<img src="load.gif" />');
$("#baelarik_"+ID).html('<img src="load.gif" />');
$("#baelakoan_"+ID).html('<img src="load.gif" />');
$("#baelako_"+ID).html('<img src="load.gif" />');
$("#baelakotz_"+ID).html('<img src="load.gif" />');
$("#baenean_"+ID).html('<img src="load.gif" />');
$("#bait_"+ID).html('<img src="load.gif" />');
$("#baittoka_"+ID).html('<img src="load.gif" />');
$("#baitnoka_"+ID).html('<img src="load.gif" />');

if(eztabada.length>0)
{

$.ajax({
type: "POST",
url: "table_edit_ajax.php",
data: dataString,
cache: false,
success: function(html)
{
$("#euskalkia_"+ID).text(euskalkia);
$("#aditza_"+ID).text(aditza);
$("#modua_"+ID).text(modua);
$("#aldia_"+ID).text(aldia);
$("#forma_"+ID).text(forma);
$("#nor_"+ID).text(nor);
$("#nori_"+ID).text(nori);
$("#nork_"+ID).text(nork);
$("#eztabada_"+ID).html(eztabada);
$("#toka_"+ID).html(toka);
$("#noka_"+ID).html(noka);
$("#xuka_"+ID).html(toka);
$("#zuka_"+ID).html(noka);
$("#en_"+ID).html(en);
$("#ela_"+ID).html(ela);
$("#ena_"+ID).html(ena);
$("#enik_"+ID).html(enik);
$("#elarik_"+ID).html(elarik);
$("#elakoan_"+ID).html(elakoan);
$("#elako_"+ID).html(elako);
$("#elakotz_"+ID).html(elakotz);
$("#enean_"+ID).html(enean);
$("#ba_"+ID).html(ba);
$("#batoka_"+ID).html(batoka);
$("#banoka_"+ID).html(banoka);
$("#baen_"+ID).html(baen);
$("#baela_"+ID).html(baela);
$("#baena_"+ID).html(baena);
$("#baenik_"+ID).html(baenik);
$("#baelarik_"+ID).html(baelarik);
$("#baelakoan_"+ID).html(baelakoan);
$("#baelako_"+ID).html(baelako);
$("#baelakotz_"+ID).html(baelakotz);
$("#baenean_"+ID).html(baenean);
$("#bait_"+ID).html(bait);
$("#baittoka_"+ID).html(baittoka);
$("#baitnoka_"+ID).html(baitnoka);
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
$(".text").show();
});

});
