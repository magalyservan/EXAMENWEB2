<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tesisista</title>
</head>
<body>
    <h1> Datos de Tesista </h1>
    <?php
    if(isset($_GET["Succes"])&& $_GET["Succes"]=="false"){
    echo "<p><b>ERROR: No se registró datos de tesista <b><p>";
    }
    ?>
    <form action="procesaFormTesista.php" method="post">

    <input type="text" name="apellidos" placeholder="Apellidos"><br>
    <input type="text" name="nombres" placeholder="Nombres"><br>
    <input type="text" name="dni" placeholder="Dni"><br>
    <input type="text" name="escuela_profesional" placeholder="Escuela Profesional"><br>
    <input type="submit" value="Guardar">
    <input type="reset" value="Restablecer">
    </form>
</body>
</html