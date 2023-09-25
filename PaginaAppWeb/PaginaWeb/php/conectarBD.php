<?php

function EstablecerConexion()
{
    $Servidor = "localhost";
    $usuario = "root";
    $password = "456";
    $nombreBD = "Hospital";
    
    //Crear la conexion a la BD
    $conexion = mysqli_connect($Servidor,$usuario,$password,$nombreBD);
    
    //comprobar que se haya conectado
    if(!$conexion) //si es falso
    {
        die("No se conecto a la BD " . mysqli_connect_error()); //para terminar el proceso
    }
    
    return $conexion;
}

?>