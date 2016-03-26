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
<p><a href="" download="filename">Download link</a></p>
<p><a href="github.com">Github</a></p>
HTML;

        return $html;
    }
}