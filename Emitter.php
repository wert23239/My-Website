<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/CityGame.zip",\Site\SiteManager::EmitterNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
$image="images/VisualCity.jpg";
$text="UNDER CONSTRUCTION";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>