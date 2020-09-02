<?php
/*
$connection = mysqli_connect("localhost:3310","root","alessandro75402273","rfast"); pc alessandro
$connection = mysqli_connect("localhost","lab","*Ut3c7599","rfast"); instancia
*/

$connect = mysqli_connect("localhost","root","Ut3c7599","lab415");
$query = "SELECT * FROM report ORDER BY 1 DESC";
$result = mysqli_query($connect,$query);
?>
<html>
    <head>
        <title>Lab 415</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="jquery.tabledit.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="container">
            <br>
            <br>
            <br>
            <div class="table-responsive">
                <h3 align="center">Tabla de fallos en el laboratorio L415</h3>
                <br>
                <table id="editable_table" class="table table-bordered table-striped">
                    <Thead>
                        <tr>
                            <th>nro</th>
                            <th>modulo</th>
                            <th>conexión</th>
                            <th>falla</th>
                            <th>nombre</th>
                            <th>notif</th>
                            <th>correo</th>
                            <th>fecha</th>
                            <th>reparo</th>
                            <th>comentario</th>
                        </tr>
                    </Thead>
                    <tbody>
                    <?php
                        while($row=mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>'.$row["ID"].'</td>
                                <td>'.$row["modulo"].'</td>
                                <td>'.$row["conexion"].'</td>
                                <td>'.$row["falla"].'</td>
                                <td>'.$row["nombre"].'</td>
                                <td>'.$row["notif"].'</td>
                                <td>'.$row["correo"].'</td>
                                <td>'.$row["fecha"].'</td>
                                <td>'.$row["reparo"].'</td>
                                <td>'.$row["coment"].'</td>
                            </tr>
                            ';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
<script src="./htdocs/ECE/jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
<script>
$(document).ready(function(){
    $('#editable_table').Tabledit({
        url:'action2.php',
        columns:{
            identifier:[0,"ID"],
            editable:[[8,"reparo"],[9,"coment"]]
        },
        restoreButton:false,
        onSuccess:function(data,textStatus,jqXHR){
            if(data.action == 'delete'){
                $('#'+data.ID).remove();
            }
        }
    });
});
</script>