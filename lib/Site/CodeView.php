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
    public function __construct($download,$gitlink)
    {
        $this->download=$download;
        $this->gitlink=$gitlink;
    }

    public function headeradditional(){
        $html=<<<HTML
<li class='last'><a href="$this->download" download><span>See Working Program</span></a></li>
<li class='last'><a href=$this->gitlink><span>See Source Code</span></a></li>
HTML;
        return $html;
    }

public function headadditional(){
    $check=$this->Title;
    $html=<<<HTML
<script type="text/javascript" src="style/js/modernizr.custom.79639.js"></script>
<script src="jquery.js"></script>
<script src="typed.js"></script>
<script>
  $(function(){
      $(".element").typed({
        strings: ["Introduction","Visual City"],
        typeSpeed: 50
      });
  });
</script>
<script>
$(function() {
	// Get page title
  	var pageTitle = $("title").text();

	// Change page title on blur
	$(window).blur(function() {
	  $("title").text(":( come back");
	});

	// Change page title back on focus
	$(window).focus(function() {
	  $("title").text(pageTitle);
	});
});
</script>
HTML;

        return $html;
    }

private $download="";
    private $gitlink="";
}