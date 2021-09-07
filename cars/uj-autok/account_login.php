<?php
	session_start();
	$_SESSION['felhasznalonev'] = $_POST['felhasznalonev'];
?>
<?php
    $csatlakozas = new Mysqli("localhost","root","","carseller");
    $adat = mysqli_query($csatlakozas,"SELECT Email , Password FROM account WHERE felhasznalonev = '$_POST[felhasznalonev]' and Password = '$_POST[Password]'");
    $sorokszama = mysqli_num_rows($adat);

    if($sorokszama == 1) {
        header ('Location:login/profile.php');
    }
    else {
        echo "A felhasználó név vagy a jelszó helytelen\n";
    }

?>

