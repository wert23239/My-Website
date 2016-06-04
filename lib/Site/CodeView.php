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
    public function __construct($id)
    {
        $this->id=$id;
        if($id%2){
            $this->color="CodeA";
        }
        else{
            $this->color="CodeB";
        }
        $this->connections= new SiteManager($id);
        $this->current=$this->connections->getCurrent();

        $this->download=$this->current->getDownload();
        $this->gitlink=$this->current->getGit();
        $this->title=$this->current->getDisplay();
        $this->image=$this->current->getImage();
        $this->description=$this->current->getDescription();
    }
    public function headadditional(){
        $check=$this->Title;
        $id=$this->id;
        $html=<<<HTML
<script type="text/javascript" src="style/js/modernizr.custom.79639.js"></script>
<script src="typed.js"></script>
<script>
$(document).ready(function() {
    var Title='$check';
    new TypeName(Title);
	new ProjectDisplay('$id');
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
      $html="";
        if($this->download!="") {
            $html .= <<<HTML
<li class='last'><a href="$this->download" download><span>Working Program</span></a></li>
HTML;
        }
        if($this->gitlink!="NULL") {
        $html.=<<<HTML
<li class='last'><a href=$this->gitlink><span>Source Code</span></a></li>
HTML;
        }
        return $html;
    }

    public function presenthead($Title)
    {
        return parent::presenthead($this->title);
    }

    public function presentDisplay()
    {
        $Prev=$this->connections->getPrevious();
        $Next=$this->connections->getNext();
        //var_dump("hey");
        //var_dump($Prev);
        $NamePre=$Prev->getName();
        $NameAft=$Next->getName();
        $Display=$this->title;
        $Second=$this->color."2";
        $html=<<<HTML
<pre>hey</pre>

<div class="jumbotron CodeA">
    <h1 class="CodeB"><strong>$Display</strong></h1>
    <div class="container">
    <ul class="pager">
        <li class="previous"><a href="$NamePre">Previous</a></li>
        <li class="next"><a href="$NameAft">Next</a></li>
    </ul>
    </div>
    <h2 class="CodeB">$this->description</h2>
    <p><img src=$this->image id="image" height="320px" class="img-responsive center-block"></p>
HTML;
        return $html;
    }


private $download="";
    private $gitlink="";
    private $id="";
    private $current;
    private $title="";
    private $connections;
    private $color="";
    private $image="";
    private $description="";
}