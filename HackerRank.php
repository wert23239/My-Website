<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/CityGame.zip","https://github.com/wert23239/Visual-City-Game",\Site\SiteManager::HackerRankNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("Hacker Rank") ?>

<body>


<?php echo $view->presentheader();
$image="images/VisualCity.jpg";
$text="This is a variety of difficult problems I have finished on HackerRank";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>