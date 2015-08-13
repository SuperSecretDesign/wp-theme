var app = {};

app.searchBar = function() {
	$('#searchform').hide();
	$('.toggleSearch').on('click', function(evnt) {
		evnt.preventDefault();
		$('#searchform').toggle();
	})
};

app.init = function(){
 	app.searchBar();
};

$(function(){
	//your jQuery here
	app.init();
});