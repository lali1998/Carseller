<?php
	session_start();
	$fhnev = $_SESSION['felhasznalonev'];

	$csatlakozas = mysqli_connect("localhost", "root", "", "carseller");
	$parancs = mysqli_query($csatlakozas,"INSERT into support (fhnev,targy,hiba_szoveg) values ('$fhnev','".$_POST['targy']."','".$_POST['message']."')");

    $sorokszama = mysqli_num_rows($parancs);

    if($sorokszama < 1) {
        header ('Location: succes_support.php');
    }
    else {
        header ('Location: fail_support.php');
    }
?>	