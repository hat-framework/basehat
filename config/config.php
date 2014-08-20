<?php

$dir   = str_replace("\\", "/", dirname(__FILE__));
$doc   = str_replace("\\", "/", $_SERVER['DOCUMENT_ROOT']);
$pj_name = str_replace(array($doc, "Application/config", "//", 'defines'), array("", "", "/", ""), $dir);
$e = explode("vendor", $pj_name);
$pj_name = array_shift($e);
if($pj_name == "/") {$pj_name = "";}
//nome do diretorio onde estara o projeto
if(!defined("PROJECT")) define('PROJECT', $pj_name);

//charset do site
if(!defined("CHARSET")) define("CHARSET", "utf-8");
