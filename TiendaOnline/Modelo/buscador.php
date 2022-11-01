<?php
include 'Modelo/Conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="busqueda"> <br>
        <input type="submit" name="enviar" value="buscar">
    </form>

    <br><br><br>

    <?php
    if(isset($_GET['enviar'])) {

        $busqueda = $_GET['busqueda'];

        $consulta = $con->query("SELECT * FROM productos WHERE porque LIKE '%$busqueda%'");

        while ($row = $consulta->fetch_array()) {
            echo $row['porque']. '<br>';
        }
    }

    ?>

</body>
<html>