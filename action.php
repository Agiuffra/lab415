<?php
/*
$connection = mysqli_connect("localhost:3310","root","alessandro75402273","rfast"); pc alessandro
$connection = mysqli_connect("localhost","root","Ut3c7599","rfast"); instancia
*/
    date_default_timezone_set("America/Lima");
    $servername = "localhost";
    $username = "root";
    $password = "Ut3c7599";
    $dbname = "lab415";
    $conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
    
    if (!$conn) {// Check connection
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Database Query 
    $modulo = filter_input(INPUT_POST,'modulo');
    $conexion = filter_input(INPUT_POST,'fluj');
    $falla = filter_input(INPUT_POST,'falla');
    $nombre = filter_input(INPUT_POST,'prof');
    $notif = filter_input(INPUT_POST,'notif');
    $correo = filter_input(INPUT_POST,'correo');
    $fecha = date("d-m-Y");
    $reparo = "no";
    $coment = "";

    if($modulo == "ROCKWELL1") {
        $conexion = filter_input(INPUT_POST,'fluj1');
    } elseif($modulo == "ROCKWELL2") {
        $conexion = filter_input(INPUT_POST,'fluj1');
    } elseif($modulo == "PCLAB") {
        $conexion = filter_input(INPUT_POST,'fluj2');
    }

    if($conexion == "otro"){
        $conexion = filter_input(INPUT_POST,'otros');
    }
    /*$conexion = $_POST['fluj'];
    $falla = $_POST['falla'];
    $nombre = $_POST['prof'];
    $notif = $_POST['notif'];
    $correo = $_POST['correo'];
    $date = $_POST[date("d-m-Y")];*/ 

    $sql = "INSERT INTO report (modulo, conexion, falla, nombre, notif, correo, fecha, reparo, coment)
                VALUES ('$modulo','$conexion','$falla','$nombre','$notif','$correo','$fecha','$reparo','$coment')";

    $result = mysqli_query($conn, $sql);

    $to_email_address = 'giuffraalessandro@gmail.com';
    $subject = 'Reporte de falla';
    $message = 'Se ha reportado una nueva falla, por favor revisar la tabla de fallas';
    $headers = 'From: giuffraalessandro@gmail.com';

    if ($result){
        mail($to_email_address,$subject,$message,$headers);
        header('Location: /index.php');
    } else {
        die("Database query failed. " . mysqli_error($conn));
    }

    mysqli_close($conn);
?>