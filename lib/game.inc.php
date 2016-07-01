<?php
require __DIR__ . "/../vendor/autoload.php";



//Start the PHP session system
session_start();

define("SITE_SESSION", 'site');

// If there is a Site session, use that. Otherwise, create one
if(!isset($_SESSION[SITE_SESSION])) {
    $_SESSION[SITE_SESSION] = new Site\SiteManager(0);  // Seed: 1422668587
}

$site = $_SESSION[SITE_SESSION];
?>



