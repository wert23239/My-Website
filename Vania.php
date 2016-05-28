<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/CityGame.zip",\Site\SiteManager::VaniaNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
?>
<pre>hey</pre>

<div class="jumbotron CodeA">
    <ul class="pager">
        <li class="previous"><a href="#">Previous</a></li>
        <li class="next"><a href="#">Next</a></li>

    </ul>
    <h1 class="CodeB"><strong>Vania Virtual Evolution</strong></h1>
    <h2 class="CodeB">A Virtual Evolution Project made at Mhacks Fall 2016 using
    A Genetic Algorithm</h2>
    <p><img src=images/gallery.jpg id="image" height="70%" class="img-responsive center-block"></p>
</div>


</body>
</html>