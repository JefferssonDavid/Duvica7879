<?php
//CONEXION AL SERVIDOR
$conexion=mysqli_connect("127.0.0.1","root","");

//SELECCIONAR LA BASE DE DATOS	
$sd=mysqli_select_db($conexion,"duvica7879");

//LEER LAS VARIABLES DEL FORMULARIO	
$Codigo_producto=$_POST["Codigo_producto"];
$Nombre_producto=$_POST["Nombre_producto"];
$Clasificacion=$_POST["Clasificacion"];
$Precio_adquisicion=$_POST["Precio_adquisicion"];
$Precio_venta=$_POST["Precio_venta"];

//SENTENCIA SQL
$sql="insert into registro_producto (Codigo_producto,Nombre_producto,Clasificacion,Precio_adquisicion,Precio_venta) values('$Codigo_producto','$Nombre_producto','$Clasificacion','$Precio_adquisicion','$Precio_venta');";
$resultado=mysqli_query($conexion,$sql);

if($resultado){
	echo '<script>alert("Cliente Guardado Satisfactoriamente")</script>';
	echo "<script>location.href='index1.html'</script>";
}else{
		echo mysqli_error($conexion);
	}
	
//CERRAR LA CONEXION
mysqli_close($conexion);

?>