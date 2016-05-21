<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;


class ResumeView extends View
{
    public function headadditional()
    {
       return <<<HTML
<link rel="stylesheet" href="style/resume.less">;
HTML;


    }


}