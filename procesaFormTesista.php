<?php
$apellidos=$_POST["apellidos"];
$nombres=$_POST["nombres"];
$dni=$_POST["dni"];
$escuela_profesional=$_POST["escuela_profesional"];

require_once "Conexion.php";
$objConexion = new Conexion();

$con = $objConexion->getConexion();

$sql = "INSERT INTO tesista(apellidos, nombres, dni, escuela_profesional) 
       VALUES('$apellidos',  '$nombres', '$dni', '$escuela_profesional')";

       if($con->query($sql)===true){
        $ultimo_id=$con->insert_id;
        header("Location: ./index.php?succes=true");

       }else{
       header( "Location: ./formulario_tesista.php?succes=false");
       }
?>