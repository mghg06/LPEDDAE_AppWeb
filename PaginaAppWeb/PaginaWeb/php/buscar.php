<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>

    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>

    <h1> Resultados de la Busqueda </h1>
    <?php
        $fecha = $_POST["fecha"];
        include("conectarBD.php");
        $conexion = EstablecerConexion();
        $sql = "SELECT * FROM cita WHERE fecha LIKE '%" . $fecha . "%'";
        $resultado = mysqli_query($conexion,$sql);
    ?>

    <table class="Formulario">
        <tr>
            <th>ID de cita</th>
            <th>Fecha</th>
            <th>ID del Paciente</th>
            <th>ID del Medico</th>
            <th>Motivo</th>
            <th>Diagnostico</th>
            <th>Tratamiento</th>
        </tr>
        
        <?php
            if( mysqli_num_rows($resultado) > 0 )
            {
                while($fila = mysqli_fetch_assoc($resultado))
                {
                    echo "<tr>" .
                            "<td>" . $fila["id_cita"] . "</td>" .
                            "<td>" . $fila["fecha"] . "</td>" .
                            "<td>" . $fila["id_paciente"] . "</td>" .
                            "<td>" . $fila["cve_medico"] . "</td>" .
                            "<td>" . $fila["motivo"] . "</td>" .
                            "<td>" . $fila["diagnostico"] . "</td>" .
                            "<td>" . $fila["tratamiento"] . "</td>" .
                         "</tr>" ;
                } 
            }
            else
            {
                echo "La consulta no regreso registros";
            }
            
            mysqli_close($conexion);
        ?>

    </table>
    


</body>
</html>