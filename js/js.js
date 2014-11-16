$(document).ready(function() {

	$.localScroll();


    $('#btn_search').click(function()
    {
    $("#area_search").css({
    "height": "20px",
    "border": "0",
    "transition": "all 0.2s ease-in",
    "visibility": "visible",
    "background-color": "#97bf0d",
    "width": "200px"
    });
    $("#btn_search").css({
    "background-color": "#97bf0d"
    });
    });
    $("#area_search").keypress(function(){
    $("#sous_search").css({
    "transition": "all 0.1s ease-in",
    "visibility": "visible",
    "height": "25px"
    });
    });

});


