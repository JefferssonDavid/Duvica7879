<?php
// conexion al servidor
$conexion = mysqli_connect("127.0.0.1","root","");

//seleccionar la base de datos
$db = mysqli_select_db($conexion,"duvica7879");

// leer las variables del formulario
$Cedula = $_POST["Cedula"];
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Direccion = $_POST["Direccion"];
$Cargo = $_POST["Cargo"];
$Fecha_de_Nacimiento =$_POST["Fecha_de_Nacimiento"];

// sentencia sql
$sql = "update registro_empleado set Nombres='$Nombres',Apellidos='$Apellidos',Direccion='$Direccion',Cargo='$Cargo',
Fecha_de_Nacimiento='$Fecha_de_Nacimiento' where Cedula = '$Cedula';";

$resultado = mysqli_query($conexion,$sql);

if($resultado)
{
	echo '<script>alert("Registro Actualizado Satisfactoriamente")</script>';
	echo "<script>location.href='listado_empleados.php'</script>";
}else{
	echo mysqli_error($conexion);
}

//cerrar la conexion
mysqli_close($conexion);

?>