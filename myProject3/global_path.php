<?php


define('PROJECT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/nordic/sofia/myProject3/');

define('DB_HOST','');
define('DB_USER','');
define('DB_PASSWORD',''); 
define('DB_NAME','');
  

	$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
	if($isHttps){
		$protocol = 'https';
	}else{
		$protocol = 'http';
	}
    $hostpath = $protocol.'://'.$_SERVER['HTTP_HOST'].'/nordic/sofia/myProject3/';
	
	//echo $_SERVER['HTTP_HOST'];
	//echo '<br>';
	
	echo $hostpath;
	
	define('PROJECT_URL',$hostpath);
	
	var_dump($_GET);
	?>