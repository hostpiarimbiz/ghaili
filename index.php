<?php
if(isset($_REQUEST['go'])){
	header('HTTP/1.0 301 Moved Permanently');
	header('Location: '.$_REQUEST['go']);
}else{
	echo 'nobody :(';
}
?>
