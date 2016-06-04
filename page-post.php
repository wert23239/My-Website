<?php

require 'lib/game.inc.php';

$debug=true;
$debug=false;

if($debug) {

    echo "<pre>";

    var_dump($_POST);
}

else{


    $controller = new \Site\ChangeSiteController($_POST);

//
// Handle controller cases...
// - Someone gave up
// - Someone won
// - Can't think of anything else...
//

echo $controller->getResult();

}