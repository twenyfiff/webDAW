<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="lt">
<head>
	<!--Meta duomenys-->
	<meta charset="UTF-8">
	<meta name="Autorius" content="Karolis Tumėnas">
	<title>Kursinis</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="jquery-3.5.1.min.js"></script>
</head>
<body onkeydown="triggerAudio(event)" onkeyup="clearLights(event)">
	<nav>
		<div class="wrapper">
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<?php
					if (isset($_SESSION["useruid"])) {
						echo "<li><a href='profile.php'>Profile</a></li>";
						echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
					}
					else {
						echo "<li><a href='signup.php'>Sign up</a></li>";
						echo "<li><a href='login.php'>Log in</a></li>";
					}
				?>
			</ul>
		</div>
	</nav>
	
	<div class="wrapper">