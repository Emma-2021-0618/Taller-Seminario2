<?php
   include "./db/conexion.php";

   $nombre = $_POST['fname'];
   $rnc = $_POST['frnc'];

   $query = mysqli_query($conection, "INSERT INTO bancos (nombre,rnc) 
                                      values ('$nombre','$rnc')");
    

    header("Location: registrarBanco.php");
?>