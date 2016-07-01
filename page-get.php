<?php

require 'lib/game.inc.php';

$debug=true;
$debug=false;

if($debug) {

    echo "<pre>";

    var_dump($_GET);
}

else{


    $controller = new \Site\ChangeSiteController($_GET,$site);

//
// Handle controller cases...
// - Someone gave up
// - Someone won
// - Can't think of anything else...
//
if($controller->getPage()=="") {
    echo $controller->getResult();
}
else{
    header('Location: ' . $controller->getPage());
    exit;
}

}