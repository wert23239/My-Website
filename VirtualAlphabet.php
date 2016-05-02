<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("downloads/Virtual_Alphabet_final.exe","https://github.com/jfreedman0/Virtual-Alphabet",\Site\SiteManager::VirtualAlphaNum);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("Virtual Alpha") ?>

<body>


<?php echo $view->presentheader();
$image="images/VirtualAlpha.png";
$text="This is game we made at my first Hackathon. It involves controlling the mouse using a Myo arm band. The game is meant
to be played by kids to help they draw the letters the correct way.";
echo $view->presentDisplay($image,$text);
?>

</body>
</html>