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


if($controller->getPage()=="") {
    echo $controller->getResult();
}
else{
    header('Location: ' . $controller->getPage());
    exit;
}

}