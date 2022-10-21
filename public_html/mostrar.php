<?php //Abrimos php
	//hacemos la conexion para la base de datos:
	$conectar=@mysql_connect('192.185.4.144', 'diasam_admin', 'Luna2020');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Encontro El Servidor";
	}else{
		$baseDedatos=@mysql_select_db('diasam_bdf');
	//verificamos la base de datos
		if(!$baseDedatos){
			echo"No Se Encontro La Base De Datos";
		}
	}
	//Se Hace la sentencia sql:
	$sql="SELECT * FROM datos"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla datos
	//ejecutamos la sentencia de slq:
	$ejecutar=mysql_query($sql);
	//traenos todos los valores en un array:
	$datos=mysql_fetch_array($ejecutar);
	//imprimimos los datos de manera dinamica
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>fecha</th>";
	echo "<th align='center'><b>tecnico</th>";
	echo "<th align='center'><b>unidad</th>";
	echo "<th align='center'><b>hinicial</th>";
	echo "<th align='center'><b>hfinal</th>";
	echo "<th align='center'><b>material0</th>";
	echo "<th align='center'><b>cantidad0</th>";
	echo "<th align='center'><b>material1</th>";
	echo "<th align='center'><b>cantidad1</th>";
	echo "<th align='center'><b>material2</th>";
	echo "<th align='center'><b>cantidad2</th>";
	echo "<th align='center'><b>material3</th>";
	echo "<th align='center'><b>cantidad3</th>";
	echo "<th align='center'><b>material4</th>";
	echo "<th align='center'><b>cantidad4</th>";
	echo "<th align='center'><b>material5</th>";
	echo "<th align='center'><b>cantidad5</th>";
	echo "<th align='center'><b>material6</th>";
	echo "<th align='center'><b>cantidad6</th>";
	echo "<th align='center'><b>material7</th>";
	echo "<th align='center'><b>cantidad7</th>";
	echo "<th align='center'><b>material8</th>";
	echo "<th align='center'><b>cantidad8</th>";
	echo "<th align='center'><b>material9</th>";
	echo "<th align='center'><b>cantidad9</th>";
	echo "<th align='center'><b>material10</th>";
	echo "<th align='center'><b>cantidad10</th>";
	echo "<th align='center'><b>material11</th>";
	echo "<th align='center'><b>cantidad11</th>";
	echo "<th align='center'><b>material12</th>";
	echo "<th align='center'><b>cantidad12</th>";
	echo "<th align='center'><b>descripcion</th>";
	echo"</tr>";
	for($i=0; $i<$datos; $i++){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
		echo"</tr>";
		$datos=mysql_fetch_array($ejecutar);
	}
	echo"</table>";
?>