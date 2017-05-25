<?php

if(!isset($_SERVER['SERVER_NAME'])) {$_SERVER['SERVER_NAME'] = "localhost";}
define('URL_PROTOCOL' , (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')|| $_SERVER['SERVER_PORT'] == 443?"https://":'http://');
define('URL'          , URL_PROTOCOL.  str_replace(array("//", DS), '/', $_SERVER['SERVER_NAME'] . "/" . PROJECT));
define('URL_FILES'    , URL . "Application/".str_replace(array("//", DS), '/', DIR_SUB_DOMAIN . DIR_FILES_RELATIVE."/"));
define('URL_IMAGENS'  , URL . "Application/".str_replace(array("//", DS), '/', DIR_SUB_DOMAIN . DIR_FILES_RELATIVE."/img/"));
define('URL_RESOURCES', URL . 'Application/recursos/');
define('URL_JS'       , URL . 'js/');
define('URL_CACHE'    , URL_FILES . 'cache/');
define('URL_LOG'      , URL_FILES . 'log/');
