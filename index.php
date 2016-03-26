<?php
require 'lib/Site/View.php';
$view= new Site\View();
?>

<!doctype html>
<html lang='en'>
<?php echo $view->presenthead("Home") ?>
<body>
<?php echo $view->presentheader() ?>
<h1>Hi I'm Alex,</h1>
<p>Programmer, Artist, and Author</p>

<p>Born in Michigan. Senior at Michigan State University Studying Computer Science with a Cognitive in Psychology. </p>
<p>I'm been doing Research for <a href="#">Arends Hintze Lab</a> and work for <a href="#">Sparrow Health Insurance</a> in the IT Department.</p>
</body>
</html>
