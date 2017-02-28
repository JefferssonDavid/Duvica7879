<?php
//CONEXION AL SERVIDOR
$conexion=mysqli_connect("127.0.0.1","root","");

//SELECCIONAR LA BASE DE DATOS	
$sd=mysqli_select_db($conexion,"duvica7879");

//LEER LAS VARIABLES DEL FORMULARIO	
$Cedula=$_POST["Cedula"];
$Nombres=$_POST["Nombres"];
$Apellidos=$_POST["Apellidos"];
$Direccion=$_POST["Direccion"];
$Fecha_de_Nacimiento=$_POST["Fecha_de_Nacimiento"];

//SENTENCIA SQL
$sql="insert into registro_cliente (Cedula,Nombres,Apellidos,Direccion,Fecha_de_Nacimiento) values('$Cedula','$Nombres','$Apellidos','$Direccion','$Fecha_de_Nacimiento');";
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