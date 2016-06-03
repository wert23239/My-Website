<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/29/2016
 * Time: 7:30 PM
 */

namespace Site;


class IndividualSite
{
    public function __construct($name,$number,$git,$display,$download,$type)
    {

        $this->name=$name;
        $this->number = $number;
        $this->type=$type;
        $this->git=$git;
        $this->displayname=$display;
        $this->download=$download;
    }
    private $name;
    private $number;
    private $type;
    private $visited;
    private $git;
    private $link;
    private $displayname;
    private $download;

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->displayname;
    }

    public function setDisplay($displayname)
    {
        $this->displayname = $displayname;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getGit()
    {
        return $this->git;
    }

    public function setGit($git)
    {
        $this->git = $git;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     *This is for cookies later on
     *
     */
    /**
     * @return mixed
     */
    public function getVisited()
    {
        return $this->visited;
    }

    /**
     * @param mixed $visited
     */
    public function setVisited($visited)
    {
        $this->visited = $visited;
    }
}