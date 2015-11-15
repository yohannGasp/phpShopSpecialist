<?php
	header('content-type: text/html;charset=utf-8');
	define('DB_HOST', 'localhost');
	define('DB_LOGIN', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_NAME', 'eshop');
	define('ORDERS_LOG', 'orders.log');
	$basket = array(); //basket
	$count = 0; // count of basket
	$link = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME) or die(mysqli_connect_error()); 
?>