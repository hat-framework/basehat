<?php

//linha adicionada para os testes de unidade (pois não tem esta variavel setada ao executarem)
if(!isset($_SERVER['SERVER_NAME'])) $_SERVER['SERVER_NAME'] = "localhost";

//urls padroes
//$project = (PROJECT == "") ? "/": PROJECT;
define('URL',  "http://".  str_replace(array("//", DS), '/', $_SERVER['SERVER_NAME'] . "/" . PROJECT));
define('URL_FILES'    , URL . str_replace(array("//", DS), '/', DIR_SUB_DOMAIN . DIR_FILES_RELATIVE."/"));
define('URL_IMAGENS'  , URL . str_replace(array("//", DS), '/', DIR_FILES_RELATIVE.'/img/'));
define('URL_RESOURCES', URL . 'recursos/');
define('URL_JS'       , URL . 'Application/static/js/');

define('URL_CACHE'    , URL_FILES . 'cache/');
define('URL_LOG'      , URL_FILES . 'log/');
