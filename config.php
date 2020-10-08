<?php
	define('ENVIRONMENT', 'development');

	global $config;
	$config = array();

	if (ENVIRONMENT == 'development') {
		define("BASE_URL", 'http://localhost/');
		$config['dbname'] = 'projeto_loja';
		$config['host']   = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}else{
		define("BASE_URL", 'http://localhost/');
		$config['dbname'] = 'mizza_tech';
		$config['host']   = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}
?>