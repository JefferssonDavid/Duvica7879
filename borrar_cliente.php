<?php
// conexion al servidor
$conexion = mysqli_connect("127.0.0.1","root","");

//seleccionar la base de datos
$db = mysqli_select_db($conexion,"duvica7879");

// sentencia sql
$sql = "delete from registro_cliente where Cedula = '$_GET[Cedula]';";


$resultado = mysqli_query($conexion,$sql);

if($resultado)
{
	
	echo '<script>alert("Cliente Borrado Satisfactoriamente")</script>';
	echo "<script>location.href='listado_clientes.php'</script>";
}else{
	echo mysqli_error($conexion);
}

//cerrar la conexion
mysqli_close($conexion);

?>
