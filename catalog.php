<?php
	require "inc/lib.inc.php";
	require "inc/db.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<h3>Товары</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>N</th>
			<th>Название</th>
			<th>Автор</th>
			<th>Год</th>
			<th>Цена</th>
		</tr>
	</thead>
	<tbody>
<?php
 	$goods = selectAllItems();
 	if(!is_array($goods)){
 		echo "error catalog.php";
 		exit;
 	}
 	if($goods){
 		echo "null array";
 		exit;
 	}
 	foreach($goods as $item){
?>
		<tr>
			<td><?= $item['id']?></td>
			<td><?= $item['title']?></td>
			<td><?= $item['author']?></td>
			<td><?= $item['pubyear']?></td>
			<td><?= $item['price']?></td>
		</tr>
<?php
 	}
 ?>
 	</tbody>
</table>
</body>
</html>