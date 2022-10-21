<?php

    $usuario = "diasam_admin";
    $password = "du0st!zOgUe3";
    $servidor = "192.185.4.144";
    $basededatos ="diasam_formulario";



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");


$db = mysqli_select_db($conexion, $basededatos) or die ("No se ha podido conectar a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$mensaje')";
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error";
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>";
    }
     
?>