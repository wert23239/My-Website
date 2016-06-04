<?php
require 'lib/game.inc.php';
$view= new Site\CodeView(\Site\SiteManager::VaniaNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
echo $view->presentDisplay();
?>

</body>
</html>