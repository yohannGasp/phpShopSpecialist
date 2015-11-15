<?php
	function clearInt($data){
		return abs((int)$data);
	}
	function clearStr($data){
		global $link;
		return mysqli_real_escape_string($link, trim(strip_tags($data)));
	}
	function addItemToCatalog($title, $author, $pubyear, $price){
		global $link;
		$sql = "INSERT INTO catalog(
							title, 
							author, 
							pubyear, 
							price)
					VALUES(?,?,?,?)";
		if(!$stmt = mysqli_prepare($link,$sql))
			return false;
		mysqli_stmt_bind_param($stmt, "ssii", $title, $author, $pubyear, $price);
		mysqli_execute($stmt);
		mysqli_close($stmt);
		return true;
	}
	function selectAllItems(){
		global $link;
		$sql = 'SELECT id, title, author, pubyear, price FROM catalog';
		if(!$result = mysqli_query($link, $sql))
			return false;
		// $items = mysqli_fetch_assoc($result);
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		return $items;
	}
?>