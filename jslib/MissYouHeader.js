/**
 * Created by Alex on 4/20/2016.
 */
function MissYou(){
    this.ChangeHeader();

}

TypeName.prototype.ChangeHeader = function() {
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
};