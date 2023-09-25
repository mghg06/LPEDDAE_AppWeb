<?php
    include("conectarBD.php");
    $conexion=EstablecerConexion();

    $fecha = date("'".$_POST["fecha"]." '");

    $id_paciente = $_POST["id_paciente"];
    $cve_medico = $_POST["cve_medico"];
    $motivo = $_POST["motivo"];
    $diagnostico = $_POST["diagnostico"];
    $tratamiento = $_POST["tratamiento"];

    $sql = "INSERT INTO cita (fecha,id_paciente,cve_medico,motivo,diagnostico,tratamiento) VALUES ($fecha,$id_paciente,$cve_medico,'$motivo','$diagnostico','$tratamiento')";

    if( mysqli_query($conexion,$sql) )
    {
        echo "<link rel='stylesheet' type='text/css' href='../css/estilo.css'>";
        echo "<link href='https://fonts.googleapis.com/css2?family=Ubuntu&display=swap' rel='stylesheet'>";
        echo "¡Se ha registrado tu cita exitosamente!";
        echo "<br>";
        echo "<h3> <a href=\"../AltaCita.html\"> Regresar </a> </h3>";
    }
    else
    {
        echo "Error al ejecutar: " . $sql . "<br>" . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
   
?>