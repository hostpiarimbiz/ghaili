<?php
$page = explode('/',$_SERVER['REQUEST_URI']);
if(isset($page[1])){
	header('Location: '.$page[1]);
}
