<?php
require 'lib/game.inc.php';
require 'lib/Site/View.php';
$view= new Site\View();
?>

<!doctype html>
<html lang='en'>
<?php echo $view->presenthead("Home") ?>
<body>
<?php echo $view->presentheader() ?>
<div class="hvr-float-shadow">
   <h1>Hi I'm Alex,</h1>
</div>
<h2>Programmer, Artist, and Author</h2>

<p>Born in Michigan. Senior at Michigan State University Studying Computer Science with a Cognitive in Psychology. </p>
<p>I'm been doing Research for <a href="#">Arends Hintze Lab</a> and work for <a href="#">Sparrow Health Insurance</a> in the IT Department.</p>
<div class="st-container">

    <input type="radio" name="radio-set" checked="checked" id="st-control-1"/>
    <a href="#st-panel-1">Serendipity</a>
    <input type="radio" name="radio-set" id="st-control-2"/>
    <a href="#st-panel-2">Happiness</a>
    <input type="radio" name="radio-set" id="st-control-3"/>
    <a href="#st-panel-3">Tranquillity</a>
    <input type="radio" name="radio-set" id="st-control-4"/>
    <a href="#st-panel-4">Positivity</a>
    <input type="radio" name="radio-set" id="st-control-5"/>
    <a href="#st-panel-5">Passion</a>

    

</div><!-- // st-container -->
<footer>
      <span><a style="margin-left:1em;color:black;" href="https://github.com/wert23239" target="_blank"><img style="height:4em;width:4em;" src="images/github.png" alt="Github" ></a></span>
      <span><a style="margin-left:1em;color:black;" href="https://www.linkedin.com/in/alexlambert52" target="_blank"><img style="height:4em;width:4em;" width="2em" height="2em" src="images/linkedin.png" alt="Linkedin"></a></span>

</footer>
</body>
</html>
