<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/CityGame.zip",\Site\SiteManager::HackerRankNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
$image="images/HackerRank.png";
$text="This is a variety of difficult problems I have finished on HackerRank";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>