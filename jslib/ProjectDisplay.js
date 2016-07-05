/**
 * Created by Alex on 4/23/2016.
 */
function ProjectDisplay(id) {
    this.initialize(id);
    console.log("id",id);
}



ProjectDisplay.prototype.initialize = function(id){

    var that = this;
    var idminus=9;
    if(id!=0){
        idminus=parseInt(id)-1;
    }
    var idplus=0;
    if(id!=9){
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