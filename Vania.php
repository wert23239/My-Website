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

<div class="container CodeA">
    <ul class="pager">
        <li class="previous"><a href="#">Previous</a></li>
        <li class="next"><a href="#">Next</a></li>

    </ul>
    <h1 class="CodeB">Vania Virtual Alpha</h1>
    <p class="CodeA2">A Virtual Evolution Project made at Mhacks Fall2016 using</p>
    <p><img src=images/gallery.jpg id="image" width="70%" center-block"></p>
</div>


</body>
</html>