<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/CityGame.zip",\Site\SiteManager::VisualCityNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
$image="images/VisualCity.jpg";
$text="This is The Visual C++ program called Visual City. It involves some nice XML saving and loading as well
as a couple cool features like adding a rotating tiles. The city even includes a game if you click the dice.";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>