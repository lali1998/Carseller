<?php
	session_start();
	$fhnev = $_SESSION['felhasznalonev'];

	$csatlakozas = mysqli_connect("localhost", "root", "", "carseller");
	$parancs = mysqli_query($csatlakozas,"INSERT into profile (profilnev,varos,iranyitoszam,lakcim,telefonszam) values ('".$fhnev."','".$_POST['varos']."','".$_POST['iranyitoszam']."','".$_POST['lakcim']."','".$_POST['telefonszam']."')");

	$sorokszama = mysqli_num_rows($parancs);

    if($sorokszama < 1) {
        header ('Location: profile.php');
    }
    else {
       
    }
?>	