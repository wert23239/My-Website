<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/29/2016
 * Time: 12:15 AM
 */

namespace Site;


class SiteManager
{
    const CodeType="code";
    const BookType="book";
    const GameType="game";
    const ArtType="art";


    const VisualCityDesc="This allows you to make your own virtual city and turn it into a puzzle";
    const VisualTreeDesc="This is Random Visual Tree Generator. It uses seeds and has wind and harvest features.";
    const MarkovBrainDesc="A virtually simulated world using evolutionary programming that is for Biological Research.";
    const EmitterDesc="A SQL compiler used to transfer queries across databases.";
    const VaniaDesc="A genetic algorithm created to beat CastleVania made at Mhacks.";
    const SteamPunkedDesc="This is a game using javascript and server-side
    scripting";
    const EmployfaiDesc= "A winner of Spartahack this app goes through your Facebook and finds
    all the inappropriate images.";
    const ResumeDesc="A simple project made to help out with learning Sass by duplicating my resume formatting";
    const VirtualAlphaDesc="The Spartahacks 2015 submission. It involves controlling the mouse using a Myo arm band.";
    const CompilerDesc="A complete object-oriented compiler with recursive functions and optimizations";
    const ShadowDesc="A mod of the game CaveStory. This includes custom animation and level design.";



    const VisualCityImage="VisualCity.jpg";
    const VisualTreeImage="Tree.png";
    const MarkovBrainImage="";
    const EmitterImage="Emitter.png";
    const VaniaImage="gallery.jpg";
    const SteamPunkedImage="Steampunked.png";
    const EmployfaiImage= "Employfai.png";
    const ResumeImage="";
    const VirtualAlphaImage="VirtualAlpha.png";
    const CompilerImage="";
    const ShadowImage="TheScarsofShadows.png";


    const VisualCityFile="CityGame.zip";
    const VisualTreeFile="Tree.zip";
    const MarkovBrainFile="";
    const EmitterFile="";
    const VaniaFile="VaniaVirtualEvolution.zip";
    const SteamPunkedFile="http://webdev.cse.msu.edu/~lambe168/project3/";
    const EmployfaiFile= "";
    const ResumeFile="http://www.cse.msu.edu/~lambe168/";
    const VirtualAlphaFile="Virtual_Alphabet_final.exe";
    const CompilerFile="";
    const ShadowFile="";

    const VisualCityGit="https://github.com/wert23239/Visual-City-Game";
    const VisualTreeGit="https://github.com/wert23239/Tree";
    const MarkovBrainGit="NULL";
    const EmitterGit="NULL";
    const VaniaGit="https://github.com/wert23239/VaniaVirtualEvolution";
    const SteamPunkedGit="http://www.comingsoon.net/";
    const EmployfaiGit= "https://github.com/wert23239/Employifai";
    const ResumeGit="http://www.cse.msu.edu/~lambe168/";
    const VirtualAlphaGit="https://github.com/jfreedman0/Virtual-Alphabet";
    const CompilerGit="http://www.comingsoon.net/";
    const ShadowGit="https://github.com/wert23239/ScarsofShadows";

    const VisualCityDisplay="Visual City";
    const VisualTreeDisplay="Visual Tree";
    const MarkovBrainDisplay="Markov Brain";
    const HackerRankDisplay="Hacker Rank";
    const EmitterDisplay="SQL Emitter";
    const VaniaDisplay="Vania Evolution";
    const SteamPunkedDisplay="Steampunked";
    const EmployfaiDiplay= "Employifai";
    const ResumeDisplay="Sass Resume";
    const VirtualAlphaDisplay="Virtual Alphabet";
    const CompilerDisplay="C++ Compiler";
    const ShadowDisplay="Sonu's Story";


    const EmployfaiNum=0;
    const SteamPunkedNum=1;
    const ResumeNum=2;
    const MarkovBrainNum=3;
    const VaniaNum=4;
    const VisualCityNum=5;
    const VisualTreeNum=6;
    const CompilerNum=7;
    const EmitterNum=8;
    const ShadowsNum=9;
    const VirtualAlphaNum=10;




    public function __construct($id)
    {
        $this->id=$id;
        $this->initialize();
       // var_dump($this->Code);
        $this->type=$this->Code[$id]->getType();
        $this->current=$this->Code[$id];
        $this->find();
    }

    public function find(){
        if ($this->type==self::CodeType){
            if($this->id!=0){
                $this->previous=$this->Code[$this->id-1];
            }
            else{
                $this->previous=$this->Code[10];
            }
            if($this->id!=10){
                $this->next=$this->Code[$this->id+1];
            }
            else{
                $this->next=$this->Code[0];
            }
        }
    }

    public function initialize(){
         $this->Code=array(
             self::VisualCityNum => new IndividualSite(self::VisualCityNum, self::VisualCityGit, self::VisualCityDisplay,
                 self::VisualCityFile,self::VisualCityImage,self::VisualCityDesc ,self::CodeType) ,
             self::VisualTreeNum => new IndividualSite(self::VisualTreeNum,self::VisualTreeGit,self::VisualTreeDisplay,
                 self::VisualTreeFile,self::VisualTreeImage,self::VisualTreeDesc,self::CodeType) ,
             self::MarkovBrainNum => new IndividualSite(self::MarkovBrainNum, self::MarkovBrainGit, self::MarkovBrainDisplay,
                 self::MarkovBrainFile,self::MarkovBrainImage,self::MarkovBrainDesc ,self::CodeType) ,
             self::EmitterNum => new IndividualSite(self::EmitterNum, self::EmitterGit,self::EmitterDisplay,
                 self::EmitterFile,self::EmitterImage,self::EmitterDesc,self::CodeType),
             self::VaniaNum=> new IndividualSite(self::VaniaNum, self::VaniaGit,self::VaniaDisplay,
                 self::VaniaFile ,self::VaniaImage,self::VaniaDesc,self::CodeType),
             self::SteamPunkedNum=> new IndividualSite(self::SteamPunkedNum, self::SteamPunkedGit,self::SteamPunkedDisplay,
                 self::SteamPunkedFile,self::SteamPunkedImage,self::SteamPunkedDesc ,self::CodeType),
             self::EmployfaiNum=> new IndividualSite(self::EmployfaiNum, self::EmployfaiGit,self::EmployfaiDiplay,
                 self::EmployfaiFile,self::EmployfaiImage,self::EmployfaiDesc,self::CodeType),
             self::ResumeNum=> new IndividualSite(self::ResumeNum, self::ResumeGit,self::ResumeDisplay,
                 self::ResumeFile,self::ResumeImage,self::ResumeDesc,self::CodeType),
             self::VirtualAlphaNum=>new IndividualSite(self::VirtualAlphaNum, self::VirtualAlphaGit,self::VirtualAlphaDisplay,
                 self::VirtualAlphaFile,self::VirtualAlphaImage,self::VirtualAlphaDesc,self::CodeType),
             self::ShadowsNum=>new IndividualSite(self::ShadowsNum,self::ShadowGit,self::ShadowDisplay,
             self::ShadowFile,self::ShadowImage,self::ShadowDesc,self::CodeType),
             self::CompilerNum=>new IndividualSite(self::CompilerNum, self::CompilerGit,self::CompilerDisplay,
                 self::CompilerFile,self::CompilerImage,self::CompilerDesc,self::CodeType),
         );
    }

    /**
     * @return mixed
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function getCurrent()
    {
        return $this->current;
    }

    public function setId($id)
    {
        $this->id = $id;
        $this->current=$this->Code[$id];
        $this->find();

    }

    public function getId()
    {
        return $this->id;
    }


    private $id=0;
    private $type;
    private $next;
    private $previous;
    private $current;
    private $Code=array();
}