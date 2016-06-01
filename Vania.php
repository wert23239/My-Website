<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/VaniaVirtualEvolution.zip",\Site\SiteManager::VaniaNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
?>
<pre>hey</pre>

<div class="jumbotron CodeA">
    <h1 class="CodeB"><strong>Vania Virtual Evolution</strong></h1>
    <ul class="pager">
        <li class="previous"><a href="#">Previous</a></li>
        <li class="next"><a href="#">Next</a></li>

    </ul>
    <h2 class="CodeB">A Virtual Evolution Project made at Mhacks Fall 2016 using
    A Genetic Algorithm</h2>
    <p><img src=images/gallery.jpg id="image" height="320px" class="img-responsive center-block"></p>
<!--    <div class="row">-->
<!--        <div class="col-xs-2 va">Previous</div>-->
<!--        -->
<!--        <div class="col-xs-2 col-md-2 col-lg-2 va">Next-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row display-table">-->
<!--        <div class="col-xs-12 col-sm-4 display-cell">-->
<!--            <img src=images/gallery.jpg id="image" height="320px" class="img-responsive center-block">-->
<!--        </div>-->
<!--        <div class="col-xs-12 col-sm-8 display-cell">-->
<!--            Next-->
<!--        </div>-->
<!--    </div>-->


</body>
</html>