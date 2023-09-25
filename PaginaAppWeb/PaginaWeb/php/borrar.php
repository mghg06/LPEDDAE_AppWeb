<?php
    include("conectarBD.php");
    $conexion = EstablecerConexion();
    $id1 = $_POST["id_cita"];
    $sql = "DELETE FROM cita WHERE id_cita = $id1";
    
    if( mysqli_query($conexion,$sql) )
    {
        echo "<link rel='stylesheet' type='text/css' href='../css/estilo.css'>";
        echo "<link href='https://fonts.googleapis.com/css2?family=Ubuntu&display=swap' rel='stylesheet'>";
        echo "Cita con ID: " . $id1 . " Se Elimino";
    }
    else
    {
        echo "Error al Borrar Cita con ID: " . $id1 . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
?>