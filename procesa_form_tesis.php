<?php
$titulo=$_POST["titulo"];
$linea_investigacion=$_POST["linea_investigacion"];
$resumen=$_POST["resumen"];
$objetivos=$_POST["objetivos"];

require_once "Conexion.php";
$objConexion = new Conexion();

$con = $objConexion->getConexion();

$sql = "INSERT INTO tesis(titulo, linea_investigacion, resumen, objetivos) 
       VALUES('$titulo',  '$linea_investigacion', '$resumen', '$objetivos')";

       if($con->query($sql)===true){
        $ultimo_id=$con->insert_id;
        header("Location: ./index.php?succes=true");

       }else{
       header( "Location: ./formularioTesis.php?succes=false");
       }
?>