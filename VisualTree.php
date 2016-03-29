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
        <p>Hey</p>
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
                <div class="st-deco" data-icon="P"></div>
                <h2>Previous</h2>
                <p>This will be the previous page</p>
            </section>

            <section class="st-panel st-color" id="st-panel-2">
                <div class="st-deco" data-icon="2"></div>
                <h2>Instruction</h2>
                <p>Art party readymade beard labore cosby sweater culpa. Art party whatever incididunt, scenester umami polaroid tofu.</p>
            </section>

            <section class="st-panel" id="st-panel-3">
                <div class="st-deco" data-icon="B"></div>
                <h2>Tranquillity</h2>
                <p>Sint aute occaecat id vice. Post-ironic fap pork belly next level godard, id fanny pack williamsburg forage truffaut.</p>
            </section>

            <section class="st-panel st-color" id="st-panel-4">
                <div class="st-deco" data-icon="x"></div>
                <h2>Positivity</h2>
                <p>Mixtape fap leggings art party, butcher authentic farm-to-table you probably haven't heard of them do labore cosby sweater.</p>
            </section>

            <section class="st-panel" id="st-panel-5">
                <div class="st-deco" data-icon="Ç"></div>
                <h2>Passion</h2>
                <p>Fixie ad odd future polaroid dreamcatcher, nesciunt carles bicycle rights accusamus mcsweeney's mumblecore nulla irony.</p>
            </section>

        </div><!-- // st-scroll -->

    </div><!-- // st-container -->

</div>

</body>
</html>