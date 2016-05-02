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
    public function __construct($name,$number,$type)
    {

        $this->name=$name;
        $this->number = $number;
        $this->type=$type;
    }
    private $name;
    private $number;
    private $type;
    private $visited;

    /**
     * @return mixed
     */
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