<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;


class CodeView extends View
{
    public function __construct($download,$gitlink,$id)
    {
        $this->download=$download;
        $this->gitlink=$gitlink;
        $this->id=$id;
        if($id%2){
            $this->color="CodeA";
        }
        else{
            $this->color="CodeB";
        }
        $this->connections= new SiteManager($id);
    }
    public function headadditional(){
        $check=$this->Title;
        $html=<<<HTML
<script type="text/javascript" src="style/js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script src="typed.js"></script>
<script>
$(document).ready(function() {
    var Title='$check';
    new TypeName(Title);

});
$(function(){
    $('.image img').load(function(){
       var img = $(this);
       img.attr('width', img.width()).attr('height', img.height());
    });
});
</script>

HTML;

        return $html;
    }


    public function headeradditional(){
        $html=<<<HTML
<li class='last'><a href="$this->download" download><span>Working Program</span></a></li>
<li class='last'><a href=$this->gitlink><span>Source Code</span></a></li>
HTML;
        return $html;
    }

    public function presentDisplay($image,$maintext)
    {
        $Prev=$this->connections->getPrevious();
        $Next=$this->connections->getNext();
        //var_dump("hey");
        //var_dump($Prev);
        $NamePre=$Prev->getName();
        $NameAft=$Next->getName();
        $Second=$this->color."2";
        $html=<<<HTML
<div class="container">


    <!--    ;-->

    <div class="st-container">
        <p class="neg2">hey</p>
        <a href=$NamePre id="st-control-1">Prev</a>
        <input type="radio" name="radio-set" checked="checked" id="st-control-2"/>
        <a href="#st-panel-2">Intro</a>
        <a href=$NameAft id="st-control-3">Next</a>

        <div class="st-scroll">

            <!-- Placeholder text from http://hipsteripsum.me/ -->

            <section class="st-panel" id="st-panel-1">
                <a href="index.php"><div class="st-deco $this->color" data-icon="S"></div></a>
               <a href=$NamePre <h2>Previous</h2></a>
               <!--<p>$NamePre</p>-->
            </section>

            <section class="st-panel $Second" id="st-panel-2">
                <a href="index.php"><div class="st-deco $this->color" data-icon="S"></div></a>
                 <h2 class="Typed">Intro</h2>
                <p><img src=$image alt="HTML5 Icon" id="image" class="image"><br>
                    $maintext</p>
            </section>

            <section class="st-panel" id="st-panel-3">
                <a href="index.php"><div class="st-deco $this->color" data-icon="S"></div></a>
               <a href=$NameAft><h2>Next</h2></a>
            </section>


        </div><!-- // st-scroll -->

    </div><!-- // st-container -->

</div>
HTML;
        return $html;
    }


private $download="";
    private $gitlink="";
    private $id="";
    private $connections;
    private $color="";
}