<?php

$usuario = "diasam_admin";
$password = "Dysam2022";
$servidor = "192.185.4.144";
$basededatos ="diasam_Informe";

    $conexion = mysqli_connect  ($servidor,$usuario,$password) or die ("No se ha podido conectar con el servidor de Base de datos");

    $db = mysqli_select_db($conexion, $basededatos) or die ("Nada que se ha podido conectar a la Base de datos");

         //recuperar las variables
    $idcliente=$_POST['idcliente'];
    $fecha=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $contacto=$_POST['contacto'];
    $bomba1=$_POST['bomba1'];
    $voltaje1=$_POST['voltaje1'];
    $corriente1=$_POST['corriente1'];
    $observaciones1=$_POST['observaciones1'];
    $bomba2=$_POST['bomba2'];
    $voltaje2=$_POST['voltaje2'];
    $corriente2=$_POST['corriente2'];
    $observaciones2=$_POST['observaciones2'];
    $bomba3=$_POST['bomba3'];
    $voltaje3=$_POST['voltaje3'];
    $corriente3=$_POST['corriente3'];
    $observaciones3=$_POST['observaciones3'];
    $bomba4=$_POST['bomba4'];
    $voltaje4=$_POST['voltaje4'];
    $corriente4=$_POST['corriente4'];
    $observaciones4=$_POST['observaciones4'];
    $bomba5=$_POST['bomba5'];
    $voltaje5=$_POST['voltaje5'];
    $corriente5=$_POST['corriente5'];
    $observaciones5=$_POST['observaciones5'];
    $bomba6=$_POST['bomba6'];
    $voltaje6=$_POST['voltaje6'];
    $corriente6=$_POST['corriente6'];
    $observaciones6=$_POST['observaciones6'];
    $bomba7=$_POST['bomba7'];
    $voltaje7=$_POST['voltaje7'];
    $corriente7=$_POST['corriente7'];
    $observaciones7=$_POST['observaciones7'];
    $bomba8=$_POST['bomba8'];
    $voltaje8=$_POST['voltaje8'];
    $corriente8=$_POST['corriente8'];
    $observaciones8=$_POST['observaciones8'];
    $bomba9=$_POST['bomba9'];
    $voltaje9=$_POST['voltaje9'];
    $corriente9=$_POST['corriente9'];
    $observaciones9=$_POST['observaciones9'];
    $bomba10=$_POST['bomba10'];
    $voltaje10=$_POST['voltaje10'];
    $corriente10=$_POST['corriente10'];
    $observaciones10=$_POST['observaciones10'];
    $valvulas=$_POST['valvulas'];
    $cheques=$_POST['cheques'];
    $mecanicos=$_POST['mecanicos'];
    $presostatos=$_POST['presostatos'];
    $manometros=$_POST['manometros'];
    $cnivel=$_POST['cnivel'];
    $capacidad=$_POST['capacidad'];
    $precarga=$_POST['precarga'];
    $observacioness=$_POST['observacioness'];
    $capacidad1=$_POST['capacidad1'];
    $precarga1=$_POST['precarga1'];
    $observacioness1=$_POST['observacioness1'];
    $capacidad2=$_POST['capacidad2'];
    $precarga2=$_POST['precarga2'];
    $observacioness2=$_POST['observacioness2'];
    $capacidad3=$_POST['capacidad3'];
    $precarga3=$_POST['precarga3'];
    $observacioness3=$_POST['observacioness3'];
    $telectrico=$_POST['telectrico'];
    $novedades=$_POST['novedades'];
    $personal=$_POST['personal'];
    $cargo=$_POST['cargo'];
    $firma=$_POST['firma'];
    
    
    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$idcliente','$fecha','$nombre','$direccion','$contacto','$bomba1','$voltaje1','$corriente1','$observaciones1',
    '$bomba2','$voltaje2','$corriente2','$observaciones2','$bomba3','$voltaje3','$corriente3','$observaciones3','$bomba4','$voltaje4','$corriente4','$observaciones4',
    '$bomba5','$voltaje5','$corriente5','$observaciones5','$bomba6','$voltaje6','$corriente6','$observaciones6','$bomba7','$voltaje7','$corriente7','$observaciones7',
    '$bomba8','$voltaje8','$corriente8','$observaciones8','$bomba9','$voltaje9','$corriente9','$observaciones9','$bomba10','$voltaje10','$corriente10','$observaciones10',
    '$valvulas','$cheques','$mecanicos','$presostatos','$manometros','$cnivel','$capacidad','$precarga','$observacioness','$capacidad1','$precarga1','$observacioness1',
    '$capacidad2','$precarga2','$observacioness2','$capacidad3','$precarga3','$observacioness3','$telectrico','$novedades','$personal','$cargo','$firma')";
    //ejecutamos la sentencia de sql
    
    $ejecutar=mysqli_query($conexion, $sql);
    //verificacion de la ejecucion
   $ejecutar=mysqli_query($conexion, $sql);
    //verificacion de la ejecucion

    if(!$ejecutar){
 
 printf("Errormessage: %s\n", mysqli_error($con));
 //echo"Hubo Algun Error";
}else{
 echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
}
     
?>


    