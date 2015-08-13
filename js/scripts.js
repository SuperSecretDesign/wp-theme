var app = {};

app.searchBar = function() {
	$('#searchInput').hide();
	$('.toggleSearch').on('click', function(evnt) {
		evnt.preventDefault();
		$('#searchInput').slideToggle();
	})
};

app.init = function(){
 	app.searchBar();
};

$(function(){
	//your jQuery here
	app.init();
});