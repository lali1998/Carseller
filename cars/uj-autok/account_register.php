<!DOCTYPE html>
<html>

	<head>
		<title>DynCar Magyarország | Bejelentkezés</title>
		<meta charset="utf-8">
		<link href="../../styles/newcar.css" rel="stylesheet">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

<body>

<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark">
	<div class="container">
		<img class="navbar_img" src="../../images/logo.png"/>
			<button class="navbar-toggler" id="dyn-nav-button" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="index.php">Főoldal</a>
				</li>
			<!--	<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="#">Vásárlás</a>
				</li>
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="#">Kedvezmények</a>
				</li>
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="#">Ügyfélszolgálat</a>
				</li>-->
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="#">DynCar világa</a>
				</li>
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="login.php">Bejelentkezés</a>
				</li>
			</ul>
		</div>
  	</div>
</nav>

<div class="acceptordeny-bg">
	<div class="acceptordeny-panel">
		<div class="row">
			<img class="" src="../../images/avatar.png" width="50px" />

<?php
	$csatlakozas = new Mysqli("localhost","root","","carseller");
	$parancs="INSERT INTO account (LastName,FirstName,Email,Password,felhasznalonev) values ('".$_POST['LastName']."','".$_POST['FirstName']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['felhasznalonev']."')";
	$data = mysqli_query($csatlakozas, $parancs);

	if($data) {
			echo "<p  class='ptext col-9 col-md-9' style='color:green'>Kedves Felhasználó! <br>Sikeresen , regisztrált a weboldalunkra! Az account elkészült!</p>";
		}
		else {
			echo "<p  class='ptext col-9 col-md-9' style='color:red'>Kedves Felhasználó! <br>Sikertelen regisztráció! Próbáld újra!</p>";
	}
?>			
			
		</div>
	</div>
</div>


<div class="dyn-footer">
	<footer>
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<h3>Nyitva tartás:</h3>
				<table>
					<tbody>
						<tr>
							<td>Hétfő</td>
							<td>8:00 - 16:00</td>
						</tr>
						<tr>
							<td>Kedd</td>
							<td>8:00 - 16:00</td>
						</tr>
						<tr>
							<td>Szerda</td>
							<td>8:00 - 16:00</td>
						</tr>
						<tr>
							<td>Csütörtök</td>
							<td>8:00 - 16:00</td>
						</tr>
						<tr>
							<td>Péntek</td>
							<td>8:00 - 16:00</td>
						</tr>
						<tr>
							<td>Szombat</td>
							<td>Zárva</td>
						</tr>
						<tr>
							<td>Vasárnap</td>
							<td>Zárva</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-sm-6 col-md-3">
				<h3>Elérhetőségeink</h3>
				<table>
					<tbody>
						<tr>
							<td>Email:</td>
							<td>Teszt szöveg</td>
						</tr>
						<tr>
							<td>Telefon:</td>
							<td>Teszt szöveg</td>
						</tr>
						<tr>
							<td>Cím:</td>
							<td>Teszt szöveg</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-md-6">
				<h3>DynCar kft</h3>
				<p>Új és használt autó kereskedéssel foglalkozó cég. Amely nemzetközileg elismert autó kereskelmi céggé nőtte ki magát.</p>
			</div>
		</div>
			<div>
				<p class="copyright">DynCar - Minden jog fenntartva.<br>
				Üzemeltető és fejlesztő: DynCar Kft.</p>
			</div>

	</footer>
</div>


	<script src="../../js/registershow.js"></script> 
	</body>
</html>