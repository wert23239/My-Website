/*! DO NOT EDIT mywebsite 2016-05-04 */
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






function  TypeName(TitleName){
    console.log(TitleName);
    this.Name=TitleName;
    this.TypeOut();

}

TypeName.prototype.TypeOut = function() {
    var that=this;
    $(function () {
        $(".Typed").typed({
            strings: [that.Name],
            typeSpeed: 50
        });
    });
};
function  KonamiComputer(){

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

}

//TypeName.prototype.TypeOut = function() {
//    var that=this;
//    $(function () {
//        $(".Typed").typed({
//            strings: ["Introduction", that.Name],
//            typeSpeed: 50
//        });
//    });
//};
/**
 * Created by Alex on 4/20/2016.
 */
function MissYou(){
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
}
