<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<form action="tab.php" method="GET">
		<div class="col-7 mx-auto mt-3">
			<h1>Добавить товар:</h1>
		</div>
		<div class="col-7 mx-auto mt-5">
			<p class="font-weight-bold">Название товара</p>
			<textarea class="w-100" placeholder="Название товара" name="name"></textarea>
		</div>
		<div class="col-7 mx-auto mt-3">
			<p class="font-weight-bold">Описание товара</p>
	    	<textarea class="w-100" placeholder="Описание товара" name="text"></textarea>
		</div>
		<div class="col-7 mx-auto mt-3">
			<p class="font-weight-bold">Цена</p>
	    	<textarea class="w-100" placeholder="Цена" name="money"></textarea>
		</div>
		<div class="col-7 mx-auto mt-3">
			<p class="font-weight-bold">Картинка</p>
	    	<textarea class="w-100" placeholder="Картинка" name="img"></textarea>
		</div>
		<div class="col-7 mx-auto mt-3">
			<button class="btn bg-success text-white" href="http://20lesson/index.php">Добавить</button>
		</div>
</body>
</html>