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
    public function __construct(SiteManager $site)
    {
        $this->connections= $site;
        $this->id=$site->getId();
        $this->current=$this->connections->getCurrent();
        $this->gitlink=$this->current->getGit();
        $this->title=$this->current->getDisplay();
        $this->image=$this->current->getImage();
        $this->description=$this->current->getDescription();
    }
    public function headadditional(){
        $check=$this->Title;
        $id=$this->id;
        $html=<<<HTML

<link href="node_modules/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style/styles.less" content="text/css">
<script type="text/javascript" src="style/js/modernizr.custom.79639.js"></script>
<script src="typed.js"></script>
<script>
$(document).ready(function() {
    var Title="$check";
    new TypeName(Title);
	new ProjectDisplay("$id");
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

    public function getSource()
    {
        if($this->gitlink=="NULL") {
            return "<a href=#><span>Proprietary</span></a>";
        }
        else{
            return "<a href=$this->gitlink target='_blank'><span>See Source</span></a>";
        }
    }

    public function headeradditional(){
        $source=$this->getSource();
        $html=<<<HTML
<li class='last alert'>$source</li>
HTML;

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

    <h1 class="CodeB"><strong>$Display</strong></h1>
    <div class="container">
    <ul class="pager">
        <li class="previous"><a href="$NamePre">Previous</a></li>
        <li class="next"><a href="$NameAft">Next</a></li>
    </ul>
    </div>
    <h2 class="CodeB">$this->description</h2>
    <div class="containerCustom">
    <p><img src=$this->image id="image" height="320px" class="img-responsive center-block"></p>
    </div>
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