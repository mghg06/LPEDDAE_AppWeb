<?php
    include("conectarBD.php");
    $conexion=EstablecerConexion();

    $fecha = date("'".$_POST["fecha"]."'");
    $idAct = $_POST["id_citaPasar"];

    $sql = "UPDATE cita SET fecha = $fecha WHERE id_cita = $idAct ";

    if( mysqli_query($conexion,$sql) )
    {
        
        //echo "Registro actualizado con exito !!!!";
        //header("Location:../FormularioAlta.html");
        header("Location:../confirmaCambio.html");
    }
    else
    {
        echo "Error al Ejecutar: " . $sql . mysqli_error($conexion);
    }

?>