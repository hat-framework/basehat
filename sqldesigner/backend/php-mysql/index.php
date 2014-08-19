<?php
	set_time_limit(0);
	require_once 'functions.php';

	$a = (isset($_GET["action"]) ? $_GET["action"] : false);
	switch ($a) {
		case "list":
			setup_saveloadlist();
			if (!connect()) {
				header("HTTP/1.0 503 Service Unavailable");
				break;
			}
			$result = mysql_query("SELECT keyword FROM ".TABLE." ORDER BY dt DESC");
			while ($row = mysql_fetch_assoc($result)) {
				echo $row["keyword"]."\n";
			}
		break;
		case "save":
			setup_saveloadlist();
			if (!connect()) {
				header("HTTP/1.0 503 Service Unavailable");
				break;
			}
			$keyword = (isset($_GET["keyword"]) ? $_GET["keyword"] : "");
			$keyword = mysql_real_escape_string($keyword);
			$data = file_get_contents("php://input");
			if (get_magic_quotes_gpc() || get_magic_quotes_runtime()) {
			   $data = stripslashes($data);
			}
			$data = mysql_real_escape_string($data);
			$r = mysql_query("SELECT * FROM ".TABLE." WHERE keyword = '".$keyword."'");
			if (mysql_num_rows($r) > 0) {
				$res = mysql_query("UPDATE ".TABLE." SET data = '".$data."' WHERE keyword = '".$keyword."'");
			} else {
				$res = mysql_query("INSERT INTO ".TABLE." (keyword, data) VALUES ('".$keyword."', '".$data."')");
			}
			if (!$res) {
				header("HTTP/1.0 500 Internal Server Error");
			} else {
				header("HTTP/1.0 201 Created");
			}
		break;
		case "load":
			setup_saveloadlist();
			if (!connect()) {
				header("HTTP/1.0 503 Service Unavailable");
				break;
			}
			$keyword = (isset($_GET["keyword"]) ? $_GET["keyword"] : "");
			$keyword = mysql_real_escape_string($keyword);
			$result = mysql_query("SELECT `data` FROM ".TABLE." WHERE keyword = '".$keyword."'");
			$row = mysql_fetch_assoc($result);
			if (!$row) {
				header("HTTP/1.0 404 Not Found");
			} else {
				header("Content-type: text/xml");
				echo $row["data"];
			}
		break;
		case "import":
			setup_import();
			if (!connect()) {
				header("HTTP/1.0 503 Service Unavailable");
				break;
			}

			header("Content-type: text/xml");
			echo import();
		break;
		default: header("HTTP/1.0 501 Not Implemented");
	}


	/*
		list: 501/200
		load: 501/200/404
		save: 501/201
		import: 501/200
	*/
?>