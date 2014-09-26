<?php

function curl_sqldesigner($name, $data){

    $file = $_SERVER['DOCUMENT_ROOT'].'/init.php';
    if(!file_exists($file)) {
        die("arquivo $file não existe!");
    }
    require_once $file;
    
    $obj  = new \classes\Classes\Object();
    $html = $obj->LoadResource('html', 'html');
    $link = $html->getLink('gerador/converter/index&ajax=true', true);
    $ch = curl_init();
    $dados = array('produto'=>$name, 'xml'=>$data, 'Crypty_base64key' => Crypty_base64key);

    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
    $content = curl_exec($ch);
    if(curl_errno($ch)){
        echo 'Curl error: ' . curl_error($ch);
        echo "-- <br/> $content";
    }
    curl_close($ch);

}

$a = (isset($_GET["action"]) ? $_GET["action"] : false);
switch ($a) {
        case "list":
                $files = glob("data/*");
                foreach ($files as $file) {
                        $name = basename($file);
                        echo $name."\n";
                }
        break;
        case "save":

                $keyword = (isset($_GET["keyword"]) ? $_GET["keyword"] : "");
                $keyword = "data/".basename($keyword);
                $f = fopen($keyword, "w");
                $data = file_get_contents("php://input");
                curl_sqldesigner($keyword, $data);
                if (get_magic_quotes_gpc() || get_magic_quotes_runtime()) {
                   $data = stripslashes($data);
                }
                fwrite($f, $data);
                fclose($f);
                header("HTTP/1.0 201 Created");			
        break;
        case "load":
                $keyword = (isset($_GET["keyword"]) ? $_GET["keyword"] : "");
                $keyword = "data/".basename($keyword);
                if (!file_exists($keyword)) {
                        header("HTTP/1.0 404 Not Found");
                } else {
                        header("Content-type: text/xml");
                        echo file_get_contents($keyword);
                }
        break;
        default: header("HTTP/1.0 501 Not Implemented");
}