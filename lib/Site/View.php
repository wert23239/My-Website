<?php

namespace Site;

class View
{
    /** Constructor
     */
    public function __construct()
    {

    }

    public function headeradditional(){
    return "";
}
    public function headadditional(){
        $html=<<<HTML
<script src="site.min.js"></script>
<script src="konami.js"></script>
<script>
$(document).ready(function() {
    new KonamiComputer();
});
</script>
<script>
    var easter_egg= new Konami('http://webdev.cse.msu.edu/~lambe168/project2/');
    easter_egg.load('http://webdev.cse.msu.edu/~lambe168/project2/');
	console.log(easter_egg)
</script>

HTML;
$html="";
        return $html;
    }

    public function presenthead($Title){
        $this->Title=$Title;
        $html="";
        $html.=<<<HTML
<head>
<meta charset='UTF-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/styles.less">
 <link href="node_modules/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="site.min.js"></script>
<script>
$(document).ready(function() {
    new MissYou();
});
</script>
<title>$Title</title>
HTML;
        $html.=$this->headadditional();
        $html.="</head>";
        return $html;
    }




    public function presentheader(){
        $html=<<<HTML
<header>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li class='has-sub'><a href=''><span>Programming</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>C++</span><div class='rank'>6/10</div></a>
            <ul>
               <li><a href='ProjectDisplay.php?id=0'><span>Visual City</span></a></li>
               <li><a href='ProjectDisplay.php?id=1'><span>Visual Tree</span></a></li>
               <li><a href='ProjectDisplay.php?id=2'><span>Virtual Evolution Markov</span></a></li>
               <li class='last'><a href='ProjectDisplay.php?id=3'><span>HackerRank</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>C#</span><div class='rank'>6/10</div></a>
            <ul>
               <li><a href='ProjectDisplay.php?id=4'><span>SQL Emitter</span></a></li>
               <li class='last'><a href='ProjectDisplay.php?id=5'><span>Deserializer</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Lua</span><div class='rank'>7/10</div></a>
            <ul>
               <li class='last'><a href='ProjectDisplay.php?id=6'><span>Vania Virtual Evolution</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Phython</span><div class='rank'>5/10</div></a>
            <ul>
               <li><a href='ProjectDisplay.php?id=7'><span>Phython Notebook Mathlib Graphing</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>WebApp</span><div class='rank'>7/10</div></a>
            <ul>
               <li><a href='ProjectDisplay.php?id=8'><span>PHP Steampunked</span></a></li>
               <li><a href='ProjectDisplay.php?id=9'><span>API Employfai</span></a></li>
               <li class='last'><a href='ProjectDisplay.php?id=10'><span>Sass Resume Project</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>GameMaker</span><div class='rank'>8/10</div></a>
            <ul>
               <li class='last'><a href='ProjectDisplay.php?id=11'><span>Virtual Alphabet</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Lex/Yacc</span><div class='rank'>5/10</div></a>
            <ul>
               <li class='last'><a href='ProjectDisplay.php?id=12'><span>C++ Compiler</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Java</span><div class='rank'>4/10</div></a>
            <ul>
               <li class='last'><a href='ProjectDisplay.php?id=13'><span>Processing</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Other</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Games</span></a>
         <ul>
            <li class='last'><a href='TheScarsofShadowsGame.php'><span>TheScarsofShadows</span></a></li>
         </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Art</span></a>
         <ul>
            <li><a href='#'><span>Ballos</span></a></li>
            <li><a href='#'><span>Owl</span></a></li>
            <li class='last'><a href='#'><span>Rin</span></a></li>
         </ul>
         <li class='has-sub'><a href='#'><span>Books</span></a>
         <ul>
             <li><a href='Books/Book1.html'><span>As Long as The Road Lacks Perspective</span></a></li>
            <li><a href='Books/Book2.html'><span>The Scars of Shadows</span></a></li>
            <li><a href='#'><span>Chaoscity</span></a></li>
            <li><a href='#'><span>On Lighter Side of Things</span></a></li>
            <li><a href='#'><span>The League of Oddicy</span></a></li>
            <li><a href='#'><span>Aim's Side</span></a></li>
            <li class='last'><a href='#'><span>Mutiny of Mutiny</span></a></li>
        </ul>
        </li>
     </ul>
   </li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
   <li class='last'><a href='ResumeComplete.php'><span>Resume</span></a></li>
HTML;
$html.=$this->headeradditional();

        $html.=<<<HTML
</header>
</ul>
</div>
HTML;





    return $html;
    }
 protected $Title;
}

