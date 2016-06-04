/*! DO NOT EDIT mywebsite 2016-06-03 */
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






/**
 * Created by Alex on 5/4/2016.
 */

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

/**
 * Created by Alex on 4/23/2016.
 */
function ProjectDisplay(id) {
    //this.runajax(sel, title, year);
    console.log(id);
};



ProjectDisplay.prototype.runajax = function(sel, title, year) {
    var that=this;
    $.ajax({
        url: "https://api.themoviedb.org/3/search/movie",
        data: {api_key: "f7843293ddf1ba30363b4f128c56e32d", query:title ,rating: year},
        method: "GET",
        dataType: "text",
        success: function(data) {
            var json = parse_json(data);// Successfully updated
            console.log("hey");
            console.log(json.results);
            if(json.total_results>0){

                that.populate(json);
                $(".B"+1).css("opacity","1.0");
                $(".B"+2).css("opacity",".3");
                $(".B"+3).css("opacity",".3");

                for(var s=1; s<=4; s++) {
                    var id= $(".B"+s);
                    var area= $("#A"+s);
                    console.log(s);
                    // We are at a star
                    that.installListener(id,s,area);
                }
            }
            else{
                $(" .paper").html("<p>No information available</p>").show();
            }



        },
        error: function(xhr, status, error) {
            // Error
            var json = parse_json(data);// Successfully updated
            console.log(json);
            $(" .paper").html("<p>Unable to communicate<br>with themoviedb.org</p>").show();
        }
    });
};

ProjectDisplay.prototype.populate= function(json){
    Total=json.results[0];
    console.log(json.results[0]);
    var overview=Total.overview;
    var Title= Total.title;
    var release= Total.release_date;
    var vote= Total.vote_average;
    var voteC= Total.vote_count;
    var poster="http://image.tmdb.org/t/p/w500/" +Total.poster_path;
    var results="";
    console.log("#opression");
    console.log(json.results[0]);
    results+="<ul>";
    results+="<li><a class=\"B1\" href=\"\"><img src=\"images/info.png\"></a>";
    results+="<div id='A1'  class=\"show\">";
    results+="<p>Title:"+Title+"</p>";
    results+="<p>Release:"+release+"</p>";
    results+="<p>Vote:"+vote+"</p>";
    results+="<p>VoteC:"+voteC+"</p>";
    results+="</div>";
    results+="</li>";
    results+="<li><a class='B2' href=\"\"><img src=\"images/plot.png\"></a>";
    results+="<div id='A2' class=\"\">";
    results+="<p>Overview:"+overview+"</p>";
    results+="</div>";
    results+="</li>";
    if(Total.poster_path!=null) {
        results += "<li><a class='B3' href=\"\"><img src=\"images/poster.png\"></a>";
        results += "<div id='A3' class=\"\">";
        results += "<p class=\"poster\"><img src=" + poster + ">";
        results += "</div>";
        results += "</li>";
    }

    results+="</ul>";
    console.log(results);
    $(" .paper").html(results).show();
};


ProjectDisplay.prototype.installListener = function(id,s,area) {
    var that = this;

    id.click(function(event) {
        console.log("working2");
        event.preventDefault();
        for(var s=1; s<=4; s++) {
            $(".B"+s).css("opacity",".3");
            $("#A"+s).fadeOut(1000);
            // We are at a star
        }

        id.css("opacity","1.0");
        area.fadeIn(1000);

    });
};