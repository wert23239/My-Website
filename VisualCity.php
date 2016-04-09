<?php
require 'lib/game.inc.php';
$view= new Site\CodeView("images/github.png","https://github.com/wert23239/Visual-City-Game");
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("Visual City") ?>

<body>


<?php echo $view->presentheader() ?>
<div class="container">


    <!--    ;-->

    <div class="st-container">
        <p class="neg2">hey</p>
        <input type="radio" name="radio-set" id="st-control-1"/>
        <a href="#st-panel-1">Prev</a>
        <input type="radio" name="radio-set" checked="checked" id="st-control-2"/>
        <a href="#st-panel-2">Intro</a>
        <input type="radio" name="radio-set" id="st-control-3"/>
        <a href="#st-panel-3">Next</a>

        <div class="st-scroll">

            <!-- Placeholder text from http://hipsteripsum.me/ -->

            <section class="st-panel" id="st-panel-1">
                <a href="index.php"><div class="st-deco" data-icon="S"></div></a>
                <h2>Previous</h2>
                <p>This will be the previous project.</p>
            </section>

            <section class="st-panel st-color" id="st-panel-2">
                <a href="index.php"><div class="st-deco" data-icon="S"></div></a>
                <h2 class="element">Intro</h2>
                <p><img src="images/VisualCity.jpg" alt="HTML5 Icon" width="50%" height="50%" class="image"><br>
                    This is The Visual C++ program called Visual City. It involves some nice XML saving and loading as well
                    as a couple cool features like adding a rotating tiles. The city even includes a game if you click the dice.</p>
            </section>

            <section class="st-panel" id="st-panel-3">
                <a href="index.php"><div class="st-deco" data-icon="S"></div></a>
                <h2>Next</h2>
                <p>This will be the next project.</p>
            </section>


        </div><!-- // st-scroll -->

    </div><!-- // st-container -->

</div>

</body>
</html>