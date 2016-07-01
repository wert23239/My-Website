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
       <link href="node_modules/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style/styles.less" content="text/css">
<script type="text/javascript" src="style/js/modernizr.custom.79639.js"></script>
<script src="typed.js"></script>
<link rel="stylesheet" href="style/Resume.less">
HTML;


    }


}