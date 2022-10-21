<?php

    $usuario = "diasam_admin";
    $password = "Dysam2022";
    $servidor = "192.185.4.144";
    $basededatos ="diasam_bdf";

    $conexion = mysqli_connect  ($servidor,$usuario,$password) or die ("No se ha podido conectar con el servidor de Base de datos");

    $db = mysqli_select_db($conexion, $basededatos) or die ("Nada que se ha podido conectar a la Base de datos");

         //recuperar las variables
    $fecha=$_POST['fecha'];
    $tecnico=$_POST['tecnico'];
    $unidad=$_POST['unidad'];
    $hinicial=$_POST['hinicial'];
    $hfinal=$_POST['hfinal'];
    $duracion=$_POST['duracion'];
    $servicio=$_POST['servicio'];
    $material0=$_POST['material0'];
    $cantidad0=$_POST['cantidad0'];
    $material1=$_POST['material1'];
    $cantidad1=$_POST['cantidad1'];
    $material2=$_POST['material2'];
    $cantidad2=$_POST['cantidad2'];
    $material3=$_POST['material3'];
    $cantidad3=$_POST['cantidad3'];
    $material4=$_POST['material4'];
    $cantidad4=$_POST['cantidad4'];
    $material5=$_POST['material5'];
    $cantidad5=$_POST['cantidad5'];
    $material6=$_POST['material6'];
    $cantidad6=$_POST['cantidad6'];
    $material7=$_POST['material7'];
    $cantidad7=$_POST['cantidad7'];
    $material8=$_POST['material8'];
    $cantidad8=$_POST['cantidad8'];
    $material9=$_POST['material9'];
    $cantidad9=$_POST['cantidad9'];
    $material10=$_POST['material10'];
    $cantidad10=$_POST['cantidad10'];
    $material11=$_POST['material11'];
    $cantidad11=$_POST['cantidad11'];
    $material12=$_POST['material12'];
    $cantidad12=$_POST['cantidad12'];
    $descripcion=$_POST['descripcion'];
    
    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$fecha','$tecnico','$unidad','$hinicial','$hfinal','$duracion','$servicio','$material0','$cantidad0','$material1','$cantidad1','$material2','$cantidad2','$material3','$cantidad3',
    '$material4','$cantidad4','$material5','$cantidad5',' $material6',' $cantidad6',' $material7','$cantidad7','$material8', '$cantidad8',
    '$material9','$cantidad9', '$material10', '$cantidad10', '$material11', '$cantidad11', '$material12','$cantidad12',
    '$descripcion')";
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);
    //verificacion de la ejecucion
    if(!$ejecutar){
        echo"huvo algun error";
    }else{
        echo"Datos guardado correctamente- Muchas Gracias<br><a href='formulario.html'>Volver</a>";
    }
     
?>



    