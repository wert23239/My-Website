( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});
} )( jQuery );


$(function() {
	// Get page title
	var pageTitle = $("title").text();

	// Change page title on blur
	$(window).blur(function() {
		$("title").text(":( come back");
	});

	// Change page title back on focus
	$(window).focus(function() {
		$("title").text(pageTitle);
	});
});

$(function(){
	$(".element").typed({
		strings: ["Introduction","Visual City"],
		typeSpeed: 50
	});
});

var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";

$(document).keydown(function(e) {

	kkeys.push( e.keyCode );

	if ( kkeys.toString().indexOf( konami ) >= 0 ) {

		$(document).unbind('keydown',arguments.callee);

		// do something awesome
		window.location = "http://levelgame.net";
		//window.location = 'http://www.levelgame.net'
	}

});