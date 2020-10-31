<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
	<style type="text/css">
		.ff {
			font-family: cursive;
		}
	</style>
</head>
<body class="ff">
	<?php
		$connect = mysqli_connect("127.0.0.1", "root" , "", "myshop");
		$text_zapros = "SELECT * FROM shop";
		$query = mysqli_query($connect, $text_zapros);
		
		$stroka1 = $query->fetch_assoc();
		$stroka2 = $query->fetch_assoc();
		$stroka3 = $query->fetch_assoc();
		$stroka4 = $query->fetch_assoc();
		$stroka5 = $query->fetch_assoc();
		$stroka6 = $query->fetch_assoc();
		$stroka7 = $query->fetch_assoc();
		$stroka8 = $query->fetch_assoc();
		$stroka9 = $query->fetch_assoc();								
		$stroka10 = $query->fetch_assoc();
		$stroka11 = $query->fetch_assoc();
	 ?>
	<div class="  col-12 " style="height: 100px; background: #ffdee9;">
		<div class=" col-11 mx-auto" style="height: 100px;">
			<div class="row">
				<div class="col-1" style="height: 100px;">
					<img src="undraw_Playful_cat_rchv.svg" class="w-100">
				</div>
				<div class="col-7" style="height: 100px;">
					<div class="row">
						<h2 class="mt-4">Только любимые товары</h2>
					</div>
				</div>
				<div class="col-4" style="height: 100px;">
					<div class="row">
						<div class="col-8 pt-4 " style="height: 50px; font-size: 25px;">
							<a href="http://20lesson/np.php" style="color: black;">Добавить товары</a>
						</div>
						<div class="col-4" style="height: 100px;">
							<img src="undraw_empty_cart_co35 (1).svg" class="w-100" style="height: 90px;">
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="  col-12 mt-5" style="height: 350px;">
		<div class=" col-11 mx-auto" style="height: 350px;">
			<div class="row">
				<div class="col-7" style="height: 350px;">
					<div class="col-8 mx-auto mt-5 pt-5">
						<h1 style="text-align: center;">Магазин, который подстроится под вас</h1>
					</div>
				</div>
				<div class="col-5" style="height: 350px;">
						<img src="undraw_welcome_cats_thqn.svg" class="w-100">
				</div>
			</div>
		</div>
	</div>
	<div class="  col-11 mx-auto mt-5" style="height: 900px;">
		<div class=" col-12 mx-auto" style="height: 440px;">
			<div class="row px-auto">
				<div class="col-4 mr-4" style="height: 400px;">
					<div class="col-9 mx-auto pb-2 pt-2" style="background: #ffdee9;">
						<?php
							echo "<h5>" . $stroka5["name"] . "</h5>";  
							echo "<img class='w-100' src='". $stroka5["img"] ."' >";
							echo "<p>" . $stroka5["sf"] . "</p>"; 
							echo "<p>" . $stroka5["text"] . "</p>";
							echo "<button class='btn' style='background: #d62d68; color: white;'>Купить</button>";
						 ?>	
					</div>
				</div>
				<div class="col-3 ml-5 mx-auto pt-2 pb-2" style="height: 450px; background: #ffdee9;">
					<?php
						echo "<h5>" . $stroka4["name"] . "</h5>";  
						echo "<img class='w-50 mx-auto' src='". $stroka4["img"] ."' >";
						echo "<p>" . $stroka4["sf"] . "</p>"; 
						echo "<p>" . $stroka4["text"] . "</p>";
						echo "<button class='btn' style='background: #d62d68; color: white;'>Купить</button>";
					 ?>
				</div>
				<div class="col-4 ml-4" style="height: 400px;">
					<div class="col-9 mx-auto pb-2 pt-2" style="background: #ffdee9;">
						<?php
							echo "<h5>" . $stroka6["name"] . "</h5>";  
							echo "<img class='w-100' src='". $stroka6["img"] ."' >";
							echo "<p>" . $stroka6["sf"] . "</p>"; 
							echo "<p>" . $stroka6["text"] . "</p>";
							echo "<button class='btn' style='background: #d62d68; color: white;'>Купить</button>";
						 ?>	
					</div>
				</div>
			</div>
		</div>
		<div class=" col-12 mx-auto mt-5" style="height: 440px;">
			<div class="row ">
				<div class="col-4 mr-4" style="height: 440px;">
					<div class="col-9 mx-auto pb-2 pt-2" style="background: #ffdee9;">
						<?php
							echo "<h5>" . $stroka1["name"] . "</h5>";  
							echo "<img class='w-100' src='". $stroka1["img"] ."' >";
							echo "<p>" . $stroka1["sf"] . "</p>"; 
							echo "<p>" . $stroka1["text"] . "</p>";
							echo "<button class='btn' style='background: #d62d68; color: white;'>Купить</button>";
						 ?>	
					</div>
				</div>
				<div class="col-3 ml-5 mx-auto pb-2 pt-2" style="height: 470px; background: #ffdee9;">
					<?php
						echo "<h5>" . $stroka3["name"] . "</h5>";  
						echo "<img class='w-50' src='". $stroka3["img"] ."' >";
						echo "<p>" . $stroka3["sf"] . "</p>"; 
						echo "<p>" . $stroka3["text"] . "</p>";
						echo "<button class='btn' style='background: #d62d68; color: white;'>Купить</button>";
					 ?>
				</div>
				<div class="col-4 ml-4" style="height: 400px;">
					<div class="col-9 mx-auto pb-2 pt-2" style="background: #ffdee9;">
						<?php
							echo "<h5>" . $stroka11["name"] . "</h5>";  
							echo "<img class='w-100' src='". $stroka11["img"] ."' >";
							echo "<p>" . $stroka11["sf"] . "</p>"; 
							echo "<p>" . $stroka11["text"] . "</p>";
							echo "<button class='btn' style='background: #d62d68; color: white;'>Купить</button>";
						 ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 pt-5" style="height: 100px; margin-top: 200px; background: #d62d68;">
		<h4 style="color: white;">*Если вам приехала какая-то не качественная фигня, то я не виновата</h4>
	</div>
</body>
</html>