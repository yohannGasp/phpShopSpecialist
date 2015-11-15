<?php
	
	// require "secure";
	require "../inc/lib.inc.php";
	require "../inc/db.inc.php";
	
	$author  = clearStr($_POST['author']);
	$title   = clearStr($_POST['title']);
	$pubyear = clearInt($_POST['pubyear']);
	$price   = clearInt($_POST['price']);

	if(!addItemToCatalog($title, $author, $pubyear, $price)){
		echo 'error addItemToCatalog()';		
	}else{
		header('Location: add2cat.php');
		exit;
	}

?>