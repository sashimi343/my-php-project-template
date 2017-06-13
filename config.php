<?php

defined('DS')       || define('DS', DIRECTORY_SEPARATOR);
defined('APP_ROOT') || define('APP_ROOT', __DIR__);

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/lib/Skinny_0.3.3/Skinny.php');

spl_autoload_register(function($className) {
    $classDirectories = array(
        APP_ROOT.DS.'app'.DS.'entities',
        APP_ROOT.DS.'app'.DS.'services',
        APP_ROOT.DS.'app'.DS.'repositories'
    );

    foreach($classDirectories as $classDirectory) {
        $classFilePath = $classDirectory.DS.$className.'.php';

        if(is_readable($classFilePath)) {
            require($classFilePath);
            return;
        }
    }
});

?>
