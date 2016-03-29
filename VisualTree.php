<?php
require 'lib/game.inc.php';
$view= new Site\CodeView();
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("Visual Tree") ?>
<body>
<?php echo $view->presentheader() ?>
<div class="container">


    <div class="st-container">
        <p class="neg2">hey</p>
        <input type="radio" name="radio-set" checked="checked" id="st-control-1"/>
        <a href="#st-panel-1">Prev</a>
        <input type="radio" name="radio-set" id="st-control-2"/>
        <a href="#st-panel-2">Intro</a>
        <input type="radio" name="radio-set" id="st-control-3"/>
        <a href="#st-panel-3">Description</a>
        <input type="radio" name="radio-set" id="st-control-4"/>
        <a href="#st-panel-4">Instructions</a>
        <input type="radio" name="radio-set" id="st-control-5"/>
        <a href="#st-panel-5">Next</a>

        <div class="st-scroll">

            <!-- Placeholder text from http://hipsteripsum.me/ -->

            <section class="st-panel" id="st-panel-1">
                <a href="index.php"><div class="st-deco" data-icon="S"></div></a>
                <h2>Previous</h2>
                <p>This will be the previous project</p>
            </section>

            <section class="st-panel st-color" id="st-panel-2">
                <a href="index.php"><div class="st-deco" data-icon="S"></div></a>
                <h2>Intro</h2>
                <p>Title then Image then paragraph</p>
            </section>

            <section class="st-panel" id="st-panel-3">
                <div class="st-deco" data-icon="S"></div>
                <h2>Description</h2>
                <p>Two Column shindig.</p>
            </section>

            <section class="st-panel st-color" id="st-panel-4">
                <div class="st-deco" data-icon="S"></div>
                <h2>Instructions</h2>
                <p>How to use app.</p>
            </section>

            <section class="st-panel" id="st-panel-5">
                <div class="st-deco" data-icon="S"></div>
                <h2>Next</h2>
                <p>This will be the previous project</p>
            </section>

        </div><!-- // st-scroll -->

    </div><!-- // st-container -->

</div>

</body>
</html>