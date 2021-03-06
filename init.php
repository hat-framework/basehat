<?php

if(!defined("APPLICATION_DIR")) {define('APPLICATION_DIR', 'Application');}
$template = filter_input(INPUT_GET, '_template');
if($template != "" && !defined("CURRENT_TEMPLATE")){define('CURRENT_TEMPLATE', $template);}

$temp = DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR;
$file = dirname(__FILE__).$temp."autoload.php";
use classes\Classes\Object;
if(file_exists($file)){require_once($file);}
//usado para debugar o site para dispositivos mobile
//if(!defined("MOBILE"))define("MOBILE", true);
set_time_limit(0);
if(!defined("is_amigavel")){ 
    if(function_exists("apache_get_modules")){
        define("is_amigavel", in_array("mod_rewrite", apache_get_modules())?true:false);
    }
}
    
//inicia uma session
session_start();

//define o modulo padrao caso tenha sido aplicado via session
if(!defined("MODULE_DEFAULT") && isset($_SESSION['module_default'])) {define("MODULE_DEFAULT", $_SESSION['module_default']);}

//seta o nome do diretorio basico da aplicacao
if (!defined('BASE_DIR')){
    define('BASE_DIR', realpath(dirname(__FILE__)."{$temp}..".DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);
}
if (!defined('DIR_BASIC')){
    define('DIR_BASIC', BASE_DIR.APPLICATION_DIR.DIRECTORY_SEPARATOR);
}

//procura o subdomínio atual
$e         = explode(".", $_SERVER['SERVER_NAME']);
$subdomain = array_shift($e);
if($subdomain == "www"){$subdomain = array_shift($e);}
if (!defined('SUB_DOMAIN'))     define('SUB_DOMAIN'       , $subdomain);
if (!defined('DIR_SUB_DOMAIN')) define('DIR_SUB_DOMAIN', "p".DIRECTORY_SEPARATOR.SUB_DOMAIN.DIRECTORY_SEPARATOR);

//carrega o arquivo de configurações responsável por inicializar o sistema
if(defined('is_admin') && is_admin) require_once(BASE_DIR . "/vendor/hatframework/basehat/config/siteAdmin.php");
require_once(BASE_DIR . "/vendor/hatframework/basehat/config/loader.php");
\classes\Classes\Registered::init(require_once (DIR_BASIC.'registered.php'));
    
ini_set('default_charset',CHARSET);
//$obj = new Object();
//$obj->LoadModel('usuario/login', 'uobj', true, true);
if(!defined("DEBUG")) define('DEBUG', true);
//if(!defined("DEBUG")) define('DEBUG', isset($_GET['debug'])?true:usuario_loginModel::IsWebmaster());

//se está em modo de debug
if(DEBUG) error_reporting(-1);
else      error_reporting("NONE");
