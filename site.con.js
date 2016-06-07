/*! DO NOT EDIT mywebsite 2016-06-06 */
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

function parse_json(json) {
    try {
        var data = $.parseJSON(json);
    } catch(err) {
        throw "JSON parse error: " + json;
    }

    return data;
}
/**
 * Created by Alex on 4/23/2016.
 */
function PipePlay(sel) {

    this.initialize(sel);
};


PipePlay.prototype.initialize = function(sel){

    var that = this;

    ///Gets the game
    var game = $(".game");

    ///Gets all of the rows
    var rows = game.find(".row");

    ///Iterates to get each individual row
    for (var r=0; r<rows.length; r++){

        ///Singles rows
        var row = $(rows.get(r));

        ///All the cells in a row
        var cells = row.find(".cell");

        ///Iterates to get each indvidual cell
        for(var j=0; j<cells.length; j++) {

            var cell = $(cells.get(j));

            var cell = $(cells.get(j));

            var grid = $(cell.find("#grid"));

            if(grid.val() === undefined){
                console.log('null');
            }
            else{
                value = grid.val().split("-",2);
                that.installListenerTiles(value[0], value[1], grid, sel);
            }

        }
    }


    ///The radio button and option buttons
    var controls = $(".player-controls");

    ///All the pipe selections
    var pipes = controls.find(".pipe");

    ///Iterates to get each pipe
    for(var i=0; i<pipes.length; i++){

        ///Single pipe buttons
        var pipe = $(pipes.get(i));

        ///Value of each pipe button
        var idb = pipe.find('input[name="pipe"]').val();

    }

    ///Control buttons
    var buttons = controls.find(".buttons");

    ///Each button value
    for(var i=0; i<buttons.length; i++){

        var button = $(buttons.get(i));

        ///Value example(Rotate, Discard, etc.)
        that.installListenerButtons(button.val(), button);

    }
    var form=$(sel);
    form.submit(function(event){
       event.preventDefault();
    });




};


PipePlay.prototype.installListenerTiles = function (row, col,cell, sel) {

    var that = this;
    //console.log(tile);

    cell.click(function () {
        var pipe = $('input[name=pipe]:checked', '#myForm').val();
        $.ajax({
            url: "game-post.php",
            data: {row: row, col: col, pipe: pipe, grid: true, ajax: true},
            method: "POST",
            success: function (data) {
                var json = parse_json(data);
                console.log(json);
                if (json.ok) {
                    that.update(json.grid);
                    that.initialize(sel);
                } else {
                    // Update failed
                }
            },
            error: function (xhr, status, error) {
                // Error
                that.message("<p>Error: " + error + "</p>");
            }
        });
    });
}


PipePlay.prototype.installListenerButtons = function (buttonVal, button, sel) {

    var that = this;

    button.click(function () {
        var pipe = $('input[name=pipe]:checked', '#myForm').val();

        $.ajax({
            url: "game-post.php",
            data: {button: buttonVal, pipe:pipe, gird:true, ajax:true},
            method: "POST",
            success: function (data) {
                var json = parse_json(data);
                if (json.ok) {
                    // Successfully updated
                    that.update(json.grid);
                    that.initialize(sel);
                } else {
                    // Update failed
                }
            },
            error: function (xhr, status, error) {
                // Error
                that.message("<p>Error: " + error + "</p>");
            }
        });
    });

};

PipePlay.prototype.update = function(grid,checked) {
    

    $("form").html(grid);


}
/**
 * Created by Alex on 4/23/2016.
 */
function ProjectDisplay(id) {
    this.initialize(id);
    console.log("id",id);
}



ProjectDisplay.prototype.initialize = function(id){

    var that = this;
    var idminus=13;
    if(id!=0){
        idminus=parseInt(id)-1;
    }
    var idplus=0;
    if(id!=13){
        idplus=parseInt(id)+1;
    }

    var buttonprevious= $(".previous");
    console.log("button previous",buttonprevious);
    that.installListener(buttonprevious, idminus);
    var buttonnext= $(".next");
    console.log("button next",buttonnext);
    console.log("idplus",idplus);
    that.installListener(buttonnext, idplus);



};


ProjectDisplay.prototype.installListener = function (buttonpressed,id) {

    var that = this;
    console.log("listernerid",id);

    buttonpressed.click(function (event) {
        event.preventDefault();
        $.ajax({
            url: "page-post.php",
            data: {id: id,ajax: true},
            method: "POST",
            success: function (data) {
                console.log("close");
                var json = parse_json(data);
                console.log(json);
                console.log(json.ok);
                if (json.ok) {
                    that.update(json.NewProject,id);
                } else {
                    // Update failed
                }
            },
            error: function (xhr, status, error) {
                // Error
                that.message("<p>Error: " + error + "</p>");
            }
        });
    });
};


ProjectDisplay.prototype.update = function(NewProject,id) {
    var that=this;
    console.log("NewProject:");
    console.log(NewProject);
    $(".jumbotron").slideUp(500,"swing",
        function(){
            $(".jumbotron").html(NewProject);
            that.initialize(id);
        }).delay(500).slideDown(500,"swing");

};

ProjectDisplay.prototype.message = function(html) {
    $("jumbotron").fadeOut(1000);
    $("jumbotron").html(html);


};