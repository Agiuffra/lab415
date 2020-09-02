<?php
/*
$connection = mysqli_connect("localhost:3310","root","alessandro75402273","rfast"); pc alessandro
$connection = mysqli_connect("localhost","lab","*Ut3c7599","rfast"); instancia
*/

$connection = mysqli_connect("localhost","root","Ut3c7599","lab415");

if(isset($_POST['user'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM log WHERE user='".$user."' AND pass='".$pass."' limit 1";
    
    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)==1){
        echo '<script type="text/javascript">';
        echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
        echo '</script>';
        //echo "loged in";
        header('Location: /tabla.php');
        exit();
    }else{
        header('Location: /login.php');
        echo "<script type=\"text/javascript\">alert('Not working');</script>";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 415</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- inicio de cabecera -->
    <div class="cabeza-img">
        <img src="UTEC.png" alt="UTEC-LOGO" width="85px" height="100px">
        <img src="EL-LOGO.png" alt="EL-LOGO" width="100px" height="100px">
    </div>
    <div class="cabeza">
        <a id="lins" href="index.html"> Inicio </a>
        <a id="lins" href="maquina.html"> Módulos </a>
        <a id="replins"href="report.html"> Reportar Falla </a>
    </div>
    <!-- fin de cabecera -->

    <!-- inicio del contenido -->
    <h2 id="headRep">Login</h2>
    <p id="descRep">En esta sección, el administrador podrá acceder a la lista completa de reportes mediante el ingreso de su usuario y contraseña.</p>
    <!-- inicio del formulario -->
    <fieldset id="cuadro">    
        <form id="log" action="#" method="POST" >
            <!-- pide usuario -->
            Usuario:<br>
            <input type="text" id="user" name="user">
            <br>
            <!-- pide contraseña -->
            Contraseña:<br>
            <input type="password" id="pass" name="pass">
            <br>
            <br>
            <!-- boton de enviar -->
            <button id="ingresar" name="ingresar" type="submit">ingresar</button>
        </form>
    </fieldset>
    <hr>
    <div>
        <footer>
            <p>Jr. Medrano Silva 165, Barranco, Lima - Perú.</p>
            <p>Copyright © 2020 UTEC. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>