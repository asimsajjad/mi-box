<?php

// echo '<pre>';
// print_r($_SERVER['REQUEST_URI']);
// echo '</pre>';
// exit;
error_reporting(E_ALL);
//error_reporting(0);
date_default_timezone_set('America/Los_Angeles');

include_once 'includes/config.php';
include_once $siteLibsIncludes;


try{

	$coreTMSObj = new tms();
}  catch (classException $e){
	echo $e->getMessage() ;
}
exit;