<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>DynCar Magyarország | Bejelentkezés</title>
		<meta charset="utf-8">
		<link href="../../../styles/newcar.css" rel="stylesheet">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

<body>

<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark">
	<div class="container">
		<img class="navbar_img" src="../../../images/logo.png"/>
			<button class="navbar-toggler" id="dyn-nav-button" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="startpage.php">Kezdőlap</a>
				</li>
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="category.php">Vásárlás</a>
				</li>
				<!--<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="#">Kedvezmények</a>
				</li>-->
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="support.php">Ügyfélszolgálat</a>
				</li>
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="about.php">DynCar világa</a>
				</li>
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="profile.php">Profil</a>
				</li>
				<li class="nav-item" id="dyn-nav-item">
					<a class="nav-link" href="../index.php">Kijelentkezés</a>
				</li>
			</ul>
		</div>
  	</div>
</nav>

<!--------------------Autó kártyák------------------>
<div class="dyncarcategorybg row col-12">
	<div class="col-3">
	<button type="button" class="dnycoll">Márka</button>
	<div class="dyncarcategory" class="d-flex flex-column">
		<!--<div>	
			<label class="dyncarlabel"><input type="checkbox" class="categoryname">Összes</label>
		</div>-->

		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname" value="audi">Audi</label>
		</div>

		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname" value="bmw">BMW</label>
		</div>

		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname" value="ford">Ford</label>
		</div>

		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname">Teszt szöveg</label>
		</div>

		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname">Teszt szöveg</label>
		</div>

		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname">Teszt szöveg</label>
		</div>

		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname">Teszt szöveg</label>
		</div>
		
		<div>
			<label class="dyncarlabel"><input type="checkbox" class="categoryname">Teszt szöveg</label>
		</div>
	</div>
	<button type="button" class="dnycoll">Modell</button>
	<div class="dyncarcategory">
		<p>Teszt szöveg</p>
	</div>
	<button type="button" class="dnycoll">Típus</button>
	<div class="dyncarcategory">
		<p>Teszt szöveg</p>
	</div>
	<button type="button" class="dnycoll">Üzemanyag</button>
	<div class="dyncarcategory">
		<p>Teszt szöveg</p>
	</div>
	<button type="button" class="dnycoll">Vételár</button>
	<div class="dyncarcategory">
		<p>Teszt szöveg</p>
	</div>
</div>




<div class="dynacardbg row col-9">
<!--<?php
    $csatlakozas = new Mysqli("localhost","root","","carseller");

	$car = array();
	if ($result = mysqli_query($csatlakozas,"SELECT * FROM carmarket")) {

	    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
	            $car[] = $row;
	    }
	    echo json_encode($car);
	}

?>-->
	

	<div class="card col-3" data-value="<?php echo $car[0]["marka_tipus"] ?>">
	  <img class="card-img-top" src="../../../images/cars/<?php echo $car[0]["kep"] ?>" alt="Card image cap">
	  <div class="card-body">
	    <center><h5 class="card-title"><?php echo $car[0]["cim"] ?></h5>
	    <p class="card-text">
			Vételár: <?php echo $car[0]["ar"] ?> FT-tól <br>

	    </p>
	    <a href="#" class="btn btn-primary">Érdekel!</a></center>
	  </div>
	</div>

	<div class="card col-3" data-value="<?php echo $car[1]["marka_tipus"] ?>">
	  <img class="card-img-top" src="../../../images/cars/<?php echo $car[1]["kep"] ?>" alt="Card image cap">
	  <div class="card-body">
	    <center><h5 class="card-title"><?php echo $car[1]["cim"] ?></h5>
	    <p class="card-text">
			Vételár: <?php echo $car[1]["ar"] ?> FT-tól <br>

	    </p>
	    <a href="#" class="btn btn-primary">Érdekel!</a></center>
	  </div>
	</div>

	<div class="card col-3" data-value="<?php echo $car[2]["marka_tipus"] ?>">
	  <img class="card-img-top" src="../../../images/cars/<?php echo $car[2]["kep"] ?>" alt="Card image cap">
	  <div class="card-body">
	    <center><h5 class="card-title"><?php echo $car[2]["cim"] ?></h5>
	    <p class="card-text">
			Vételár: <?php echo $car[2]["ar"] ?> FT-tól

	    </p>
	    <a href="#" class="btn btn-primary">Érdekel!</a></center>
	  </div>
	</div>

	<div class="card col-3" data-value="<?php echo $car[3]["marka_tipus"] ?>">
	  <img class="card-img-top" src="../../../images/cars/<?php echo $car[3]["kep"] ?>" alt="Card image cap">
	  <div class="card-body">
	    <center><h5 class="card-title"><?php echo $car[3]["cim"] ?></h5>
	    <p class="card-text">
			Vételár: <?php echo $car[3]["ar"] ?> FT-tól <br>

	    </p>
	    <a href="#" class="btn btn-primary">Érdekel!</a></center>
	  </div>
	</div>

	<div class="card col-3" data-value="<?php echo $car[4]["marka_tipus"] ?>">
	  <img class="card-img-top" src="../../../images/cars/<?php echo $car[4]["kep"] ?>" alt="Card image cap">
	  <div class="card-body">
	    <center><h5 class="card-title"><?php echo $car[4]["cim"] ?></h5>
	    <p class="card-text">
			Vételár: <?php echo $car[4]["ar"] ?> FT-tól <br>

	    </p>
	    <a href="#" class="btn btn-primary">Érdekel!</a></center>
	  </div>
	</div>

	<div class="card col-3" data-value="<?php echo $car[5]["marka_tipus"] ?>">
	  <img class="card-img-top" src="../../../images/cars/<?php echo $car[5]["kep"] ?>" alt="Card image cap">
	  <div class="card-body">
	    <center><h5 class="card-title"><?php echo $car[5]["cim"] ?></h5>
	    <p class="card-text">
			Vételár: <?php echo $car[5]["ar"] ?> FT-tól <br>

	    </p>
	    <a href="#" class="btn btn-primary">Érdekel!</a></center>
	  </div>
	</div>

</div>


</div>



<!--------------------Autó kártyák------------------>
		<script src="../../../js/categoryshow.js"></script> 

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

	<script>
       $(document).ready(function () {
            $(".categoryname").click(function () {
                    var optionValue = $(this).attr("value");
                    if (this.checked) {
                        $(".dynacardbg > div").css("display","none");
                        $(".dynacardbg > div[data-value='"+$(this).val().toLowerCase()+"']").css("display","block");


                        console.log(  $(this).val() );
                    } else {
                        $(".dynacardbg > div").css("display","block");
                    }
            });
        });

	</script>
	</body>
</html>
