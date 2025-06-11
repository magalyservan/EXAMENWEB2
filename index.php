<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Tesis y Tesistas</title>
</head>
<body>
     <p>https://github.com/magalyservan/EXAMENWEB2.git</p>
    <h1>Listado de Tesis</h1>
    
    <?php
    if(isset($_GET["Succes"]) && $_GET["Succes"]=="true"){
        echo "<p><b>El procesamiento fue exitoso. </b></p>";
    }else if(isset($_GET["Succes"]) && $_GET["Succes"]=="false"){
        echo "<p><b>Error: Algo salió mal.</b></p>";
    }
    ?>
    <p>
        <a href="formularioTesis.php">Formulario de Tesis </a>
    </p>

 <table border="1">
   <thead>
    <tr>
        <th>Titulo</th>
        <th>Linea de Investigación</th>
        <th>Objetivos</th>
        <th>Acciones</th>
    </tr>
   </thead>
   <tbody>
    <?php
require_once "Conexion.php";
$sql = "SELECT *FROM tesis WHERE estado=0";

$objConexion = new Conexion();

$con = $objConexion->getConexion();
$resultado = $con->query($sql);

if($resultado->num_rows>0){
    while($fila = $resultado->fetch_assoc()){
        echo "<tr>";
        echo "<td> ".$fila['titulo']."</td>";
        echo "<td> " .$fila['linea_investigacion']."</td>";
        echo "<td> " .$fila['objetivos']."</td>";
        echo "<td> 
            <a href='./editarTesis.php?id=".$fila['id']."'>Editar</a>
            <a href='./eliminarTesis.php?id=".$fila['id']."'>Eliminar</a>
            </td>";
        echo "</tr>";
    }
}else{
    echo "<tr><td colspan ='3'> 0 resultados</td></tr>";
}
    ?>
   </tbody>

  </table>

    <h1>Listado de Tesistas</h1>
    
    <?php
    if(isset($_GET["Succes"]) && $_GET["Succes"]=="true"){
        echo "<p><b>El procesamiento fue exitoso. </b></p>";
    }else if(isset($_GET["Succes"]) && $_GET["Succes"]=="false"){
        echo "<p><b>Error: Algo salió mal.</b></p>";
    }
    ?>
    <p>
        <a href="formulario_tesista.php">Formulario de Tesista</a>
    </p>

  <table border="1">
   <thead>
    <tr>
        <th>Apellidos</th>
        <th>Nombres</th>
        <th>Escuela Profesional</th>
        <th>Acciones</th>
    </tr>
   </thead>
   <tbody>
    <?php
require_once "Conexion.php";
$sql = "SELECT *FROM tesista WHERE estado=0 ";

$objConexion = new Conexion();

$con = $objConexion->getConexion();
$resultado = $con->query($sql);

if($resultado->num_rows>0){
    while($fila = $resultado->fetch_assoc()){
        echo "<tr>";
        echo "<td> ".$fila['nombres']."</td>";
        echo "<td> " .$fila['apellidos']."</td>";
        echo "<td> " .$fila['escuela_profesional']."</td>";
        echo "<td> 
            <a href='./editar_tesista.php?id=".$fila['id']."'>Editar</a>
            <a href='./eliminar_tesista.php?id=".$fila['id']."'>Eliminar</a>
            </td>";
        echo "</tr>";
    }
}else{
    echo "<tr><td colspan ='3'> 0 resultados</td></tr>";
}
    ?>
   </tbody>

  </table>
</body>
</html>
