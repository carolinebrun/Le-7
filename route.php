<?php session_start();

$gets = explode('/', $_GET['get']);

foreach($gets AS $get){
	$i = $i+1;
	${'get_'.$i} = $get;
}

$url = 'http://'.$_SERVER['SERVER_NAME'].'/';

if($get==''){
	$page 		= "home";
} else{
	$page 		= $get_1;	
	if(!file_exists('pages/'.$get_1.'.php')) {
		$page 		= "404";		
	}
}

ob_start();

	include('pages/'.$page.'.php');

$content = ob_get_contents();
ob_end_clean();

$content = str_replace("site:", "/", $content);