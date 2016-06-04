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
    const DownloadPath="downloads/";
    const ImagePath="images/";
    const NamePath="ProjectDisplay.php?id=";
    public function __construct($number,$git,$display,$download,$image,$desc,$type)
    {
        $this->name=self::NamePath;
        $this->name.=$number;
        $this->number = $number;
        $this->type=$type;
        $this->git=$git;
        $this->displayname=$display;
        if($download!=""){
            $this->download=self::DownloadPath;
            $this->download.=$download;
        }
        $this->image=self::ImagePath;
        $this->image.=$image;
        $this->description=$desc;

    }
    private $name;
    private $number;
    private $type;
    private $visited;
    private $git;
    private $link;
    private $displayname;
    private $download="";
    private $image;
    private $description;

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



    public function getDownload()
    {
        return $this->download;
    }

    public function setDownload($download)
    {
        $this->download = $download;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}