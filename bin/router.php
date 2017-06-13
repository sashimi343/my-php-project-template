<?php

require(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php');

if(file_exists(APP_ROOT.DS.'public_html'.parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
} else {
    require '.'.DS.'index.php';
}
?>
