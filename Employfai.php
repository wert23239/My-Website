<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/Tree.zip",\Site\SiteManager::EmployfaiNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
$image="images/Tree.png";
$text="This is Random Visual Tree Generator. It uses seeds and has wind and harvest features. This was created
 in software design class as was part.";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>