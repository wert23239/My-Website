<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/CityGame.zip","https://github.com/wert23239/Visual-City-Game",1);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("SQL Emitter") ?>

<body>


<?php echo $view->presentheader();
$image="images/VisualCity.jpg";
$text="UNDER CONSTRUCTION";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>