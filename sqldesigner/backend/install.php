<?php

require 'php-mysql/index.php';
setup_saveloadlist();
if(connect()){
    mysql_query(file_get_contents("php-mysql/database.sql"));
}

?>
