<?php

namespace Site;

class View
{
    /** Constructor
     */
    public function __construct()
    {
        $this->title="Home";
    }

    public function headeradditional(){
    return "";
}
    public function headadditional(){
       return <<<HTML
<!--[if IE 11]>
	<link rel="stylesheet" href="style/styles.css" content="text/css">
<![endif]-->
<link rel="stylesheet" href="style/styles.less" content="text/less">
<link href="node_modules/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    }

    public function presenthead($Title){
      $PageTitle=$this->title;
        $html="";
        $html.=<<<HTML
<head>
<meta charset='UTF-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="site.min.js"></script>
<script src="typed.js"></script>

<script>
$(document).ready(function() {
    var Title = "$PageTitle" ;
    new MissYou(Title);
    new TypeName("Hey");
});
</script>
<title>
HTML;
        $html.=$this->getTitle();
        $html.="</title>";
        $html.=$this->headadditional();
        $html.="</head>";
        return $html;
    }

    public function getTitle()
    {
        return $this->title;
    }


    public function presentheader(){

        define('VISUALCITYNUM', SiteManager::VisualCityNum);
        define('VISUALTREENUM', SiteManager::VisualTreeNum);
        define('VIRTUALEVOLUTIONNUM', SiteManager::MarkovBrainNum);
        define('EMITTERNUM', SiteManager::EmitterNum);
        define('VANIANUM', SiteManager::VaniaNum);
        define('STEAMPUNKEDNUM', SiteManager::SteamPunkedNum);
        define('EMPLOYFAINUM', SiteManager::EmployfaiNum);
        define('SHADOWSNUM', SiteManager::ShadowsNum);
        define('ALPHABETNUM', SiteManager::VirtualAlphaNum);
        define('COMPILENUM', SiteManager::CompilerNum);
        define('BALLOSNUM', SiteManager::BallosNum);
        define('SKETCHNUM', SiteManager::SketchNum);
        $cname = 'constant'; // if you want to use a function in heredoc, you must save function name in variable

        $html=<<<HTML
<header>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li><a href='ResumeComplete.php'><span>Resume</span></a></li>
   <li class='has-sub'><a href=''><span>Experience</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Web Development</span></a>
            <ul>
               <li><a href='page-post.php?id={$cname("EMPLOYFAINUM")}'><span>Employfai</span></a></li>
               <li class='last'><a href='page-post.php?id={$cname("STEAMPUNKEDNUM")}'><span>Steampunked</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Neural Networks</span></a>
            <ul>
               <li><a href='page-post.php?id={$cname("VIRTUALEVOLUTIONNUM")}'><span>MABE</span></a></li>
               <li class='last'><a href='page-post.php?id={$cname("VANIANUM")}'><span>Vania Virtual Evolution</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>App Development</span></a>
            <ul>
               <li><a href='page-post.php?id={$cname("VISUALCITYNUM")}'><span>Visual City</span></a></li>
               <li class='last'><a href='page-post.php?id={$cname("VISUALTREENUM")}'><span>Visual Tree</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Compilers</span></a>
            <ul>
               <li><a href='page-post.php?id={$cname("COMPILENUM")}'><span>Object-Oriented Compiler</span></a></li>
               <li class='last'><a href='page-post.php?id={$cname("EMITTERNUM")}'><span>SQL-to-SQL Translator</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Game Design</span></a>
            <ul>
               <li><a href='page-post.php?id={$cname("SHADOWSNUM")}'><span>Sonu's Story</span></a></li>
               <li class='last'><a href='page-post.php?id={$cname("ALPHABETNUM")}'><span>Virtual Alphabet</span></a></li>
            </ul>
         </li>
         <li class='has-sub last'><a href='#'><span>Art</span></a>
         <ul>
            <li><a href='page-post.php?id={$cname("BALLOSNUM")}'><span>Ballos</span></a></li>
            <li class='last'><a href='page-post.php?id={$cname("SKETCHNUM")}'><span>Sketch book</span></a></li>
         </ul>
      </ul>
   </li>
   <!--<li class="last"><span><a style="margin-left:1em;color:black;" href="https://github.com/wert23239" target="_blank"><img style="height:2em;width:2em;" src="images/github2.png" alt="Github" ></a></span></li>-->
HTML;
$html.=$this->headeradditional();

        $html.=<<<HTML
</header>
</ul>
</div>
HTML;





    return $html;
    }


 public $title;
}

