<?php
	$connect = mysqli_connect("127.0.0.1", "root" , "", "myshop");
	$sql = "INSERT INTO shop (name, sf, text, img) VALUES ('" . $_GET['name'] . "', '" . $_GET['money'] . "', '" . $_GET['text'] . "', '" . $_GET['img'] . "')";
	mysqli_query($connect, $sql);

 ?>