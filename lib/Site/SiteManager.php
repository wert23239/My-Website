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

    const VisualCity="VisualCity.php";
    const VisualTree="VisualTree.php";
    const MarkovBrain="MarkovBrain.php";
    const HackerRank="HackerRank.php";
    const Emitter="Emitter.php";
    const Deserializer="Deserializer.php";
    const Vania="Vania.php";
    const PythonGraphing="PythonGraphing.php";
    const SteamPunked="SteamPunked.php";
    const Employfai= "Employfai.php";
    const Resume="SassResume.php";
    const VirtualAlpha="VirtualAlphabet.php";
    const Compiler="Compiler.php";
    const Processing="Processing.php";

    const VisualCityFile="CityGame.zip";
    const VisualTreeFile="Tree.zip";
    const MarkovBrainFile="";
    const HackerRankFile="";
    const EmitterFile="";
    const DeserializerFile="";
    const VaniaFile="VaniaVirtualEvolution.zip";
    const PythonGraphingFile="";
    const SteamPunkedFile="http://webdev.cse.msu.edu/~lambe168/project3/";
    const EmployfaiFile= "";
    const ResumeFile="http://www.cse.msu.edu/~lambe168/";
    const VirtualAlphaFile="Virtual_Alphabet_final.exe";
    const CompilerFile="";
    const ProcessingFile="";

    const VisualCityGit="https://github.com/wert23239/Visual-City-Game";
    const VisualTreeGit="https://github.com/wert23239/Tree";
    const MarkovBrainGit="NULL";
    const HackerRankGit="http://www.comingsoon.net/";
    const EmitterGit="NULL";
    const DeserializerGit="NULL";
    const VaniaGit="https://github.com/wert23239/VaniaVirtualEvolution";
    const PythonGraphingGit="http://www.comingsoon.net/";
    const SteamPunkedGit="http://www.comingsoon.net/";
    const EmployfaiGit= "https://github.com/wert23239/Employifai";
    const ResumeGit="NULL";
    const VirtualAlphaGit="https://github.com/jfreedman0/Virtual-Alphabet";
    const CompilerGit="http://www.comingsoon.net/";
    const ProcessingGit="http://www.comingsoon.net/";

    const VisualCityDisplay="Visual City";
    const VisualTreeDisplay="Visual Tree";
    const MarkovBrainDisplay="Markov Brain";
    const HackerRankDisplay="Hacker Rank";
    const EmitterDisplay="SQL Emitter";
    const DeserializerDisplay="XML Deserializer";
    const VaniaDisplay="Vania Virtual Evolution";
    const PythonGraphingDisplay="Python Graphing";
    const SteamPunkedDisplay="Steampunked";
    const EmployfaiDiplay= "Employifai";
    const ResumeDisplay="Sass Resume Project";
    const VirtualAlphaDisplay="Virtual Alphabet";
    const CompilerDisplay="C++ Compiler";
    const ProcessingDisplay="Evolutionary Processing Display";

    const VisualCityNum=0;
    const VisualTreeNum=1;
    const MarkovBrainNum=2;
    const HackerRankNum=3;
    const EmitterNum=4;
    const DeserializerNum=5;
    const VaniaNum=6;
    const PythonGraphingNum=7;
    const SteamPunkedNum=8;
    const EmployfaiNum= 9;
    const ResumeNum=10;
    const VirtualAlphaNum=11;
    const CompilerNum=12;
    const ProcessingNum=13;


    const TheScarsofShadows="TheScarsofShadows.php";
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
                $this->previous=$this->Code[13];
            }
            if($this->id!=13){
                $this->next=$this->Code[$this->id+1];
            }
            else{
                $this->next=$this->Code[0];
            }
        }
    }

    public function initialize(){
         $this->Code=array(
             self::VisualCityNum => new IndividualSite(self::VisualCity,self::VisualCityNum,
                 self::VisualCityGit, self::VisualCityDisplay,self::VisualCityFile, self::CodeType) ,
             self::VisualTreeNum => new IndividualSite(self::VisualTree,self::VisualTreeNum,
                 self::VisualTreeGit,self::VisualTreeDisplay,self::VisualTreeFile,self::CodeType) ,
             self::MarkovBrainNum => new IndividualSite(self::MarkovBrain,self::MarkovBrainNum,
                 self::MarkovBrainGit,self::MarkovBrainDisplay,self::MarkovBrainFile, self::CodeType) ,
             self::HackerRankNum => new IndividualSite(self::HackerRank,self::HackerRankNum,
                 self::HackerRankGit,self::HackerRankDisplay,self::HackerRankFile,self::CodeType),
             self::EmitterNum => new IndividualSite(self::Emitter,self::EmitterNum,
                 self::EmitterGit,self::EmitterDisplay,self::EmitterFile,self::CodeType),
             self::DeserializerNum => new IndividualSite(self::Deserializer,self::DeserializerNum,
                 self::DeserializerGit,self::DeserializerDisplay,self::DeserializerFile,self::CodeType),
             self::VaniaNum=> new IndividualSite(self::Vania,self::VaniaNum,
                 self::VaniaGit,self::VaniaDisplay,self::VaniaFile ,self::CodeType),
             self::PythonGraphingNum=> new IndividualSite(self::PythonGraphing,self::PythonGraphingNum,
                 self::PythonGraphingGit,self::PythonGraphingDisplay,self::PythonGraphingFile,self::CodeType),
             self::SteamPunkedNum=> new IndividualSite(self::SteamPunked,self::SteamPunkedNum,
                 self::SteamPunkedGit,self::SteamPunkedDisplay,self::SteamPunkedFile ,self::CodeType),
             self::EmployfaiNum=> new IndividualSite(self::Employfai,self::EmployfaiNum,
                 self::EmployfaiGit,self::EmployfaiDiplay,self::EmployfaiFile,self::CodeType),
             self::ResumeNum=> new IndividualSite(self::Resume,self::ResumeNum,
                 self::ResumeGit,self::ResumeDisplay,self::ResumeFile,self::CodeType),
             self::VirtualAlphaNum=>new IndividualSite(self::VirtualAlpha,self::VirtualAlphaNum,
                 self::VirtualAlphaGit,self::VirtualAlphaDisplay,self::VirtualAlphaFile,self::CodeType),
             self::CompilerNum=>new IndividualSite(self::Compiler,self::CompilerNum,
                 self::CompilerGit,self::CompilerDisplay,self::CompilerFile,self::CodeType),
             self::ProcessingNum=>new IndividualSite(self::Processing,self::ProcessingNum,
                 self::ProcessingGit,self::ProcessingDisplay,self::ProcessingFile,self::CodeType),
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


    private $id;
    private $type;
    private $next;
    private $previous;
    private $current;
    private $Code=array();
}