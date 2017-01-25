<?php
//$page = explode('/',$_SERVER['REQUEST_URI']);
//if(isset($page[1])){
	//header('Location: '.$page[1]);
//}

header('HTTP/1.0 301 Moved Permanently');
header('Location: '.$_GET['go']);
?>
