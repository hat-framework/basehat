<?php
define("DS", DIRECTORY_SEPARATOR);
//define os diretorios relativos das pastas padrao
define('DIR_CONFIG_SUBDOMAIN' , DIR_BASIC . DIR_SUB_DOMAIN . 'config'.DS);
define('CONFIG_SUBDOMAIN'     , DIR_CONFIG_SUBDOMAIN . 'config'.DS.'config'.DS);
define('CONFIG'               , BASE_DIR . "vendor".DS."hatframework".DS."basehat".DS."config".DS);
define('GLOBALF'              , BASE_DIR  . 'vendor'.DS.'hatframework'.DS.'hatclasses'.DS.'src'.DS.'Global'.DS);

//definicao dos diretorios da aplicacao
define('DIR_PROJECTS'        , 'p'.DS);
define('DIR_FILES_RELATIVE'  , 'static'.DS.'files');
define('DIR_FILES'           , DIR_BASIC . DIR_SUB_DOMAIN . DIR_FILES_RELATIVE.DS);
define('DIR_IMAGENS'         , DIR_BASIC . DIR_SUB_DOMAIN . DIR_FILES_RELATIVE.DS.'img'.DS);

define('DIR_CACHE'           , DIR_FILES            . 'cache'.DS);
define('DIR_LOG'             , DIR_FILES            . 'log'.DS);
define('GERADOR'             , DIR_FILES            . 'gerador'.DS);
//define('GERADOR'             , DIR_BASIC            . 'static'.DS.'gerador'.DS);
define('SUBDOMAIN_RESOURCES' , DIR_CONFIG_SUBDOMAIN . 'resource'.DS);
define('SUBDOMAIN_MODULOS'   , DIR_CONFIG_SUBDOMAIN . 'plugin'.DS);
define('DIR_JS'              , BASE_DIR             . 'js'.DS);

