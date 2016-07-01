<?php
/**
 * Created by PhpStorm.
 * User: Zack Herrick
 * Date: 2/11/2016
 * Time: 5:36 PM
 */

namespace Site;


class ChangeSiteController{
    /**
     * SteampunkedController constructor.
     * @param SteampunkedGame $game, game instance we are controlling.
     * @param $request, _POST request.
     */
    public function __construct($request,SiteManager $site) {
        //
        // Handle request.
        //

        $this->id = 0;
        if(isset($request['id'])){
            $this->id=$request['id'];
            $site->setId($this->id);
        }


        if(isset($request['ajax'])){
            $view = new CodeView($site);
            $this->result = json_encode(array('ok' => true,'NewProject'=> $view->presentDisplay()));
        }
        else{
            $this->page="ProjectDisplay.php";
        }
        


    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    
    public function isReset(){
        return $this->reset;
    }

    public function isRotate(){
        return $this->rotate;
    }

    public function getPage(){
        return $this->page;
    }

    private $game;                  // The game model we're using.
    private $reset = false;         // Do we need to start a new game
    private $rotate = false;
    private $page  = "";
    private $result;


}