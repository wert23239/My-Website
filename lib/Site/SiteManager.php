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
    const VaniaVirtualEvolution="Vania.php";
    const PythonGraphing="PythonGraphing.php";
    const SteamPunked="SteamPunked.php";
    const Employfai= "Employfai.php";
    const Resume="Resume.php";
    const VirtualAlpha="VirtualAlpha.php";
    const Compiler="Compiler.php";
    const Processing="Processing.php";

    const VisualCityNum=0;
    const VisualTreeNum=1;
    const MarkovBrainNum=2;
    const HackerRankNum=3;
    const EmitterNum=4;
    const DeserializerNum=5;
    const VaniaVirtualEvolutionNum=6;
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
            if($this->id!=14){
                $this->next=$this->Code[$this->id+1];
            }
            else{
                $this->next=$this->Code[0];
            }
        }
    }

    public function initialize(){
         $this->Code=array(
             self::VisualCityNum => new IndividualSite(self::VisualCity,self::VisualCityNum,self::CodeType) ,
             self::VisualTreeNum => new IndividualSite(self::VisualTree,self::VisualTreeNum,self::CodeType) ,
             self::MarkovBrainNum => new IndividualSite(self::MarkovBrain,self::MarkovBrainNum,self::CodeType) ,
             self::HackerRankNum => new IndividualSite(self::HackerRank,self::HackerRankNum,self::CodeType),
             self::EmitterNum => new IndividualSite(self::Emitter,self::EmitterNum,self::CodeType),
             self::DeserializerNum => new IndividualSite(self::Deserializer,self::DeserializerNum,self::CodeType),
             self::VaniaVirtualEvolutionNum=> new IndividualSite(self::VaniaVirtualEvolution,self::VaniaVirtualEvolutionNum,self::CodeType),
             self::PythonGraphingNum=> new IndividualSite(self::PythonGraphing,self::PythonGraphingNum,self::CodeType),
             self::SteamPunkedNum=> new IndividualSite(self::SteamPunked,self::SteamPunkedNum,self::CodeType),
             self::EmployfaiNum=> new IndividualSite(self::Employfai,self::EmployfaiNum,self::CodeType),
             self::ResumeNum=> new IndividualSite(self::Resume,self::ResumeNum,self::CodeType),
             self::VirtualAlphaNum=>new IndividualSite(self::VirtualAlpha,self::VirtualAlphaNum,self::CodeType),
             self::CompilerNum=>new IndividualSite(self::Compiler,self::CompilerNum,self::CodeType),
             self::ProcessingNum=>new IndividualSite(self::Processing,self::ProcessingNum,self::CodeType),
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




    private $id;
    private $type;
    private $next;
    private $previous;
    private $Code=array();
}