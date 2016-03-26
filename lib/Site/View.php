<?php

namespace Site;

class View
{
    /** Constructor
     */
    public function __construct()
    {

    }

    public function headadditional(){
        return "";
    }

    public function presenthead($Title){
        $html="";
        $html.=$this->headadditional();
        $html.=<<<HTML
<head>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<title>$Title</title>
</head>
HTML;
        return $html;
    }

    public function presentheader(){
        $html=<<<HTML
<header>
<div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Programming</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>C++</span><div class='rank'>6/10</div></a>
            <ul>
               <li><a href='#'><span>Visual Tree</span></a></li>
               <li><a href='VisualCity.php'><span>Visual City</span></a></li>
               <li><a href='#'><span>Virtual Evolution Markov</span></a></li>
               <li class='last'><a href='#'><span>HackerRank</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>C#</span><div class='rank'>6/10</div></a>
            <ul>
               <li><a href='#'><span>SQL Emitter</span></a></li>
               <li class='last'><a href='#'><span>Deserializer</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Lua</span><div class='rank'>7/10</div></a>
            <ul>
               <li class='last'><a href='#'><span>Vania Virtual Evolution</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Phython</span><div class='rank'>5/10</div></a>
            <ul>
               <li><a href='#'><span>Phython Notebook Mathlib Graphing</span></a></li>
               <li class='last'><a href='#'><span>HackerRank</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Assembly Code</span><div class='rank'>6/10</div></a>
            <ul>
               <li class='last'><a href='#'><span>Computer Architecture</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>WebApp</span><div class='rank'>7/10</div></a>
            <ul>
               <li><a href='#'><span>PHP Steampunked</span></a></li>
               <li><a href='#'><span>API Employfai</span></a></li>
               <li class='last'><a href='#'><span>Sass Resume Project</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>GameMaker</span><div class='rank'>8/10</div></a>
            <ul>
               <li class='last'><a href='#'><span>Virtual Alphabet</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Flex/Bison</span><div class='rank'>5/10</div></a>
            <ul>
               <li class='last'><a href='#'><span>C++ Compiler</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Java</span><div class='rank'>4/10</div></a>
            <ul>
               <li class='last'><a href='Code/Processing.html'><span>Processing</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Art</span></a>
      <ul>
         <li><a href='#'><span>Ballos</span></a></li>
         <li><a href='#'><span>Owl</span></a></li>
         <li><a href='#'><span>Rin</span></a></li>
         <li class='last'><a href='#'><span>Old</span></a></li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Book</span></a>
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
   <li class='last'><a href='#'><span>Contact</span></a></li>
   <li class='last'><a href='#'><span>Resume</span></a></li>
</ul>
</div>
</header>
HTML;
    return $html;
    }

}
