<?php

require_once (dirname(__FILE__) . "/paths.php");
require_once (dirname(__FILE__) . "/config.php");


require_once (dirname(__FILE__) ."/urls.php");
if(file_exists(CONFIG_SUBDOMAIN . "config.php"))require_once (CONFIG_SUBDOMAIN . "config.php"); else require_once ('geral.php');
if(file_exists(CONFIG_SUBDOMAIN . "crypt.php")) require_once (CONFIG_SUBDOMAIN . "crypt.php");  else require_once ('crypt.php');
if(file_exists(CONFIG_SUBDOMAIN . "info.php"))  require_once (CONFIG_SUBDOMAIN . "info.php");   else require_once ('site.php');
require_once ("geral.php");
require_once ("template.php");

//require_once (SYSTEM    . 'Autoload.php');
require_once (GLOBALF   . 'global_functions.php');
require_once (GLOBALF   . 'debug.php');
require_once (GLOBALF   . 'text.php');
require_once (GLOBALF   . 'simple_curl.php');
require_once (GLOBALF   . 'constants.php');