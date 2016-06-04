/**
 * Created by Alex on 4/23/2016.
 */
function ProjectDisplay(id) {
    this.initialize(id);
    console.log(id);
}



ProjectDisplay.prototype.initialize = function(id){

    var that = this;
    var idminus=13;
    if(id!=0){
        id=id-1;
    }
    var idplus=0;
    if(id!=13){
        id=id+1;
    }
    var buttonprevious= $(".previous");
    that.installListener(buttonprevious, idminus);
    var buttonnext= $(".next");
    that.installListener(buttonnext, idplus);



};


ProjectDisplay.prototype.installListenerTiles = function (buttonpressed,id) {

    var that = this;
    console.log(id);

    buttonpressed.click(function (event) {
        event.preventDefault();
        $.ajax({
            url: "page-post.php",
            data: {id: id,ajax: true},
            method: "POST",
            success: function (data) {
                var json = parse_json(data);
                console.log(json);
                if (json.ok) {
                    that.update(json.NewProject);
                    that.initialize(id);
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


ProjectDisplay.prototype.update = function(NewProject) {


    $("jumbotron").html(NewProject);


};