<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Визитка</title>
	<link rel="stylesheet" href="style.css" />
	
</head>

<body>
	
<div class="container">
	<div class="headers">
		<?php include 'logo.inc.php' ?>
		<?php include 'menu.inc.php' ?>
	</div>

	<div class="for_me">
		<h1><?php echo $a ?></h1>
			
			<div class="photo">
				<div class="gif">
					<img src="img/Cattyping.gif">
				</div>
						<div class="name">
							<p>Меня зовут
								<?php echo $name, ' ' . '<br>'; ?></p>
							<p> Мне 
								<?php echo $age, ' ' . '<br>'; ?></p>
							<p>Я из <?php echo $city; ?></p>
						
								<div class="knowledge.inc.php">
									<?php include 'knowledge.inc.php' ?>
								</div>
						</div>
			</div>

	</div>

</body>
<footer>

	<p> Мы изучаем PHP</p>
</footer>
</html>