<?php
// conexion al servidor
$conexion = mysqli_connect("127.0.0.1","root","");

//seleccionar la base de datos
$db = mysqli_select_db($conexion,"duvica7879");

// sentencia sql
$sql = "delete from registro_producto where Codigo_producto = '$_GET[Codigo_producto]';";


$resultado = mysqli_query($conexion,$sql);

if($resultado)
{
	echo '<script>alert("Producto Borrado Satisfactoriamente")</script>';
	echo "<script>location.href='listado_productos.php'</script>";
}else{
	echo mysqli_error($conexion);
}

//cerrar la conexion
mysqli_close($conexion);

?>
