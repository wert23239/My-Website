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
    const VirtualAlphaDesc="The Spartahacks 2015 submission. It involves controlling the mouse using a Myo arm band.";
    const CompilerDesc="A complete object-oriented compiler with recursive functions and optimizations";
    const ShadowDesc="A mod of the game CaveStory. This includes custom animation and level design.";
    const BallosDesc="";
    const SketchDesc="";



    const VisualCityImage="VisualCity.jpg";
    const VisualTreeImage="Tree.png";
    const MarkovBrainImage="MABE.png";
    const EmitterImage="Emitter.png";
    const VaniaImage="gallery.jpg";
    const SteamPunkedImage="Steampunked.png";
    const EmployfaiImage= "Employfai.png";
    const VirtualAlphaImage="VirtualAlpha.png";
    const CompilerImage="";
    const ShadowImage="TheScarsofShadows.png";
    const BallosImage="Ballos.png";
    const SketchImage="SketchBookArt.png";


    const VisualCityGit="https://github.com/wert23239/Visual-City-Game";
    const VisualTreeGit="https://github.com/wert23239/Tree";
    const MarkovBrainGit="https://github.com/ahnt/MABE/tree/Lambe168WIP";
    const EmitterGit="NULL";
    const VaniaGit="https://github.com/wert23239/VaniaVirtualEvolution";
    const SteamPunkedGit="https://github.com/wert23239/Project1";
    const EmployfaiGit= "https://github.com/wert23239/Employifai";
    const VirtualAlphaGit="https://github.com/jfreedman0/Virtual-Alphabet";
    const CompilerGit="NULL";
    const ShadowGit="https://github.com/wert23239/TheScarsofShadows";
    const BallosGit="ART";
    const SketchGit="ART";

    const VisualCityDisplay="Visual City";
    const VisualTreeDisplay="Visual Tree";
    const MarkovBrainDisplay="Markov Brain";
    const HackerRankDisplay="Hacker Rank";
    const EmitterDisplay="SQL Emitter";
    const VaniaDisplay="Vania Evolution";
    const SteamPunkedDisplay="Steampunked";
    const EmployfaiDiplay= "Employifai";
    const VirtualAlphaDisplay="Virtual Alphabet";
    const CompilerDisplay="C++ Compiler";
    const ShadowDisplay="Sonu's Story";
    const BallosDisplay="Ballos";
    const SketchDisplay="Sketch Book";

    const EmployfaiNum=0;
    const SteamPunkedNum=1;
    const MarkovBrainNum=2;
    const VaniaNum=3;
    const VisualCityNum=4;
    const VisualTreeNum=5;
    const CompilerNum=6;
    const EmitterNum=7;
    const ShadowsNum=8;
    const VirtualAlphaNum=9;
    const BallosNum=10;
    const SketchNum=11;



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
                $this->previous=$this->Code[11];
            }
            if($this->id!=11){
                $this->next=$this->Code[$this->id+1];
            }
            else{
                $this->next=$this->Code[0];
            }
        }
    }

    public function initialize(){
         $this->Code=array(
             self::VisualCityNum => new IndividualSite(self::VisualCityNum, self::VisualCityGit, self::VisualCityDisplay, self::VisualCityImage, self::VisualCityDesc, self::CodeType) ,
             self::VisualTreeNum => new IndividualSite(self::VisualTreeNum, self::VisualTreeGit, self::VisualTreeDisplay, self::VisualTreeImage, self::VisualTreeDesc, self::CodeType) ,
             self::MarkovBrainNum => new IndividualSite(self::MarkovBrainNum, self::MarkovBrainGit, self::MarkovBrainDisplay, self::MarkovBrainImage, self::MarkovBrainDesc, self::CodeType) ,
             self::EmitterNum => new IndividualSite(self::EmitterNum, self::EmitterGit, self::EmitterDisplay, self::EmitterImage, self::EmitterDesc, self::CodeType),
             self::VaniaNum=> new IndividualSite(self::VaniaNum, self::VaniaGit, self::VaniaDisplay, self::VaniaImage, self::VaniaDesc, self::CodeType),
             self::SteamPunkedNum=> new IndividualSite(self::SteamPunkedNum, self::SteamPunkedGit, self::SteamPunkedDisplay, self::SteamPunkedImage, self::SteamPunkedDesc, self::CodeType),
             self::EmployfaiNum=> new IndividualSite(self::EmployfaiNum, self::EmployfaiGit, self::EmployfaiDiplay, self::EmployfaiImage, self::EmployfaiDesc, self::CodeType),
             self::VirtualAlphaNum=>new IndividualSite(self::VirtualAlphaNum, self::VirtualAlphaGit, self::VirtualAlphaDisplay, self::VirtualAlphaImage, self::VirtualAlphaDesc, self::CodeType),
             self::ShadowsNum=>new IndividualSite(self::ShadowsNum, self::ShadowGit, self::ShadowDisplay, self::ShadowImage, self::ShadowDesc, self::CodeType),
             self::CompilerNum=>new IndividualSite(self::CompilerNum, self::CompilerGit, self::CompilerDisplay, self::CompilerImage, self::CompilerDesc, self::CodeType),
             self::BallosNum=>new IndividualSite(self::BallosNum, self::BallosGit, self::BallosDisplay, self::BallosImage, self::BallosDesc, self::CodeType),
             self::SketchNum=>new IndividualSite(self::SketchNum, self::SketchGit, self::SketchDisplay, self::SketchImage, self::SketchDesc, self::CodeType),
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