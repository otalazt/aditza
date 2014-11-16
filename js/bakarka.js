$(document).ready(function()
{
$( "#menubotoia" ).click(function() {
$( "#menumenua" ).slideToggle( "slow", function() {
	$( "#menubotoia" ).toggleClass( "bukatua" )
});
});
$( "#alokutiboa" ).click(function() {
	$( ".toka" ).toggle( "slow");
	$( ".noka" ).toggle( "slow");
	$( ".zuka" ).toggle( "slow");
	$( ".xuka" ).toggle( "slow");
});
$( "#menderatu" ).click(function() {
	$( ".baitmende" ).toggle( "slow");
	$( ".menderagailuak" ).toggle( "slow");
	$( ".bamende" ).toggle( "slow");
});
	
	
	(function(){
    var customSelects = document.querySelectorAll(".custom-dropdown__select");
    for(var i=0; i<customSelects.length; i++){
        if (customSelects[i].hasAttribute("disabled")){
            customSelects[i].parentNode.className += " custom-dropdown--disabled";
        }
    }
})()
});
