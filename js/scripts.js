var app = {};

app.searchBar = function() {
	$('#searchform').hide();
	
}

app.init = function()
 {
 	app.searchBar();
 }
$(function(){
	//your jQuery here
	app.init();
});