<?php

    if(empty($_POST)){$_POST = (array)json_decode(file_get_contents('php://input'));}
    require_once 'init.php';
    if(isset($_SESSION['template'])) define('CURRENT_TEMPLATE', $_SESSION['template']);
    else                             define('CURRENT_TEMPLATE', TEMPLATE_DEFAULT);
    
    if(!defined("is_admin")) define('is_admin', false);
    try{$start = new \classes\System\CSystem();}
    catch (Exception $e){ genericException($e->getCode(), $e->getMessage());}
    
    try{
        $start->run();
    }

    //Tratamento dos demais erros ocorridos
    catch (Exception $e) {
        try {
            $start->catchExcetion($e->getCode(), $e->getMessage());
        }
        catch (Exception $e){ genericException($e->getCode(), $e->getMessage());}
    }