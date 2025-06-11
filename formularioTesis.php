<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tesis</title>
</head>
<body>
    <h1> Información de Tesis</h1>
    <?php
    if(isset($_GET["Succes"])&& $_GET["Succes"]=="false"){
    echo "<p><b>ERROR: No se registró información de tesis<b><p>";
    }
    ?>
    <form action="procesa_form_tesis.php" method="post">

    <input type="text" name="titulo" placeholder="Titulo"><br>
    <input type="text" name="linea_investigacion" placeholder="Linea de Investigación"><br>
    <input type="text" name="resumen" placeholder="Resumen"><br>
    <input type="text" name="objetivos" placeholder="Objetivos"><br>
    <input type="submit" value="Guardar">
    <input type="reset" value="Restablecer">
    </form>
</body>
</html