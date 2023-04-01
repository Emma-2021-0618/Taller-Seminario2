<?php
   include "./db/conexion.php";

   $nombre = $_POST['fname'];
   $apellido = $_POST['lname'];
   $direccion = $_POST['direccion'];
   $telefono = $_POST['telefono'];
   $sexo = $_POST['sexo'];
   $fechaActual = date("Y-m-d");

   $query = mysqli_query($conection, "INSERT INTO tblclientes (nombres,apellidos,direccion,telefono,sexo,fcreado) 
                                      values ('$nombre','$apellido','$direccion',$telefono,'$sexo','$fechaActual')");
    

    header("Location: registrarClientes.php");
?>