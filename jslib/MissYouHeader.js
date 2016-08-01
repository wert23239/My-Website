/**
 * Created by Alex on 4/20/2016.
 */
function MissYou(Title){
    $(function() {
        // Get page title
        var pageTitle = Title;

        // Change page title on blur
        $(window).blur(function() {
            pageTitle=$("title").text();
            $("title").text(":( come back");
        });

        // Change page title back on focus
        $(window).focus(function() {
            $("title").text(pageTitle);
        });
    });
}
