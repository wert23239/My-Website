<?php
require 'lib/game.inc.php';
$view= new Site\GameView("downloads/TheScarsofShadows.zip","https://github.com/wert23239/ScarsofShadows",1);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("The Scars of Shadows") ?>

<body>


<?php echo $view->presentheader();
$image="images/TheScarsOfShadows.png";
$text="This is A mod of the game CaveStory. It is built with the program Cave Editor";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>