<?php
require 'lib/game.inc.php';
$id=0;
if(isset($_GET['id'])){
   $id=$_GET['id'];
}
$view= new Site\CodeView($id);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body>


<?php echo $view->presentheader();
echo $view->presentPre();
echo $view->presentDisplay();
?>

</body>
</html>