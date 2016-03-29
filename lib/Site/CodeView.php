<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;


class CodeView extends View
{
    public function headeradditional(){
        $html=<<<HTML
<li class='last'><a href="" download="filename"><span>See Working Program</span></a></li>
<li class='last'><a href="github.com" download="filename"><span>See Source Code</span></a></li>
HTML;
        return $html;
    }

public function headadditional(){

    $html=<<<HTML
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
HTML;

        return $html;
    }


}