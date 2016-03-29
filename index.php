<?php
require 'lib/game.inc.php';
$view= new Site\View();
?>

<!doctype html>
<html lang='en'>
<?php echo $view->presenthead("Home") ?>
<body>
<p class="neg">.</p>
<?php echo $view->presentheader() ?>
<div class="hvr-float-shadow">
   <h1>Hi I'm Alex,</h1>
</div>
<h2>Programmer, Artist, and Author</h2>

<p>Born in Michigan. Senior at Michigan State University Studying Computer Science with a Cognitive in Psychology. </p>
<p>I'm been doing Research for <a href="#">Arends Hintze Lab</a> and work for <a href="#">Sparrow Health Insurance</a> in the IT Department.</p>
<div class="st-container">

</div><!-- // st-container -->
<footer>
      <span><a style="margin-left:1em;color:black;" href="https://github.com/wert23239" target="_blank"><img style="height:4em;width:4em;" src="images/github.png" alt="Github" ></a></span>
      <span><a style="margin-left:1em;color:black;" href="https://www.linkedin.com/in/alexlambert52" target="_blank"><img style="height:4em;width:4em;" width="2em" height="2em" src="images/linkedin.png" alt="Linkedin"></a></span>

</footer>
</body>
</html>
