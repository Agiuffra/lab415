<?php
/*
$connection = mysqli_connect("localhost:3310","root","alessandro75402273","rfast"); pc alessandro
$connection = mysqli_connect("localhost","root","Ut3c7599","rfast"); instancia
*/

$connection = mysqli_connect("localhost","root","Ut3c7599","lab415");

$input = filter_input_array(INPUT_POST);

$falla = mysqli_real_escape_string($connection,$input["coment"]);
$reparo = mysqli_real_escape_string($connection,$input["reparo"]);

if($input["action"] === 'edit')
{
    $query = "
    UPDATE report
    SET coment = '".$falla."',
    reparo = '".$reparo."'
    WHERE ID = '".$input["ID"]."'
    ";

    mysqli_query($connection,$query);
}
if($input["action"] === 'delete')
{
    $query = "
    DELETE FROM report
    WHERE ID = '".$input["ID"]."'
    ";

    mysqli_query($connection,$query);
}

echo json_encode($input);

?>