<?php
    session_start();
    $felnev = $_SESSION['felhasznalonev'];
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
                    <a class="nav-link" href="startpage.php">Főoldal</a>
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
                    <a class="nav-link" href="#">DynCar világa</a>
                </li>
                <li class="nav-item" id="dyn-nav-item">
                    <a class="nav-link" href="profile.php">Profil</a>
                </li>
                <li class="nav-item" id="dyn-nav-item">
                    <a class="nav-link" href="../login.php">Kijelentkezés</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="acceptordeny-bg">
    <div class="acceptordeny-panel">
        <div class="row">
            <img class="" src="../../../images/avatar.png" width="50px" />

            <p  class='ptext col-9 col-md-9' style='color:red'>Kedves <?php echo $felnev; ?> ! <br>Az üzenet elküldése közben hiba lépett fel! A probléma megoldása érdekében , keresse fel az elérhetőségünket!</p>      
            
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