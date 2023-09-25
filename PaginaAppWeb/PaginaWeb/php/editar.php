<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fecha de Cita</title>


    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>

<h1> Modificar Fecha</h1>
    <?php
        include("conectarBD.php");
        $conexion = EstablecerConexion();
        $busqueda = $_POST["id_cita"];
        $sql = "SELECT * FROM cita WHERE id_cita = $busqueda";
        $resultado = mysqli_query($conexion,$sql);

        if(mysqli_num_rows($resultado) > 0)
        {
            if(mysqli_num_rows($resultado) > 1)
            {
                echo "<center><h1>La Consulta regreso MULTIPLES Registros</h1></center>";
                echo "<br><center><h3> <a href=\"../CambiarFecha.html\">REGRESAR</a> </h3></center>";
            }
            else
            {
                //Crear Variables Locales y asignarles el resultado del Query
                while($fila = mysqli_fetch_assoc($resultado))
                {
                    $id_citaRes = $fila["id_cita"];
                    $fechaRes = $fila["fecha"];
                    $id_pacienteRes = $fila["id_paciente"];
                    $cve_medicoRes = $fila["cve_medico"];
                    $motivoRes = $fila["motivo"];
                    $diagnosticoRes = $fila["diagnostico"];
                    $tratamientoRes = $fila["tratamiento"];
                }
            }
        }
        else
        {
            echo "<center><h1>La Consulta no regreso Registros</h1></center>";
            echo "<br><center><h3> <a href=\"../CambiarFecha.html\">REGRESAR</a> </h3></center>";
        }
        
        mysqli_free_result($resultado);
        
        mysqli_close($conexion);
    ?>

    <form id="Formulario"  name="Datos" method="post" action="modificar.php">
        ID Cita:
        <br>
        <input type="text" class="datoEntrada" name="id_cita" value = <?php echo "\"" . $id_citaRes . "\" "; ?> disabled />
        <br>
        <input type="hidden" class="datoEntrada" name="id_citaPasar" value = <?php echo "\"" . $id_citaRes . "\" "; ?>/>
        <br>
        

        Fecha:
        <input type="date" class="datoEntrada" name="fecha" value = <?php echo "\"" . $nombreRes . "\" "; ?> autofocus required />
        <br>

        <input type="submit" id="procesar" value="Actualizar Fecha">

    </form>

</body>
</html>