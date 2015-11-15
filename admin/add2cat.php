<?php
		// require "secure";
	require "../inc/db.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавить товар в каталог</title>
</head>
<body>
	<form action="save2cat.php" method="post">
		<p>Название: <input type="text" placeholder="Text input" name="title"></p>
		<p>Автор:    <input type="text" placeholder="Text input" name="author"></p>
		<p>Год издания: <input type="text" placeholder="Text input" name="pubyear" size="4"></p>
		<p>Цена: <input type="text" placeholder="Text input" name="price" size="6"></p>
		<button type="submit" class="btn btn-primary">Save changes</button>
	</form>

</body>
</html>