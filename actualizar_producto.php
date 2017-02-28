<?php
// conexion al servidor
$conexion = mysqli_connect("127.0.0.1","root","");

//seleccionar la base de datos
$db = mysqli_select_db($conexion,"duvica7879");

// leer las variables del formulario
$Codigo_producto = $_POST["Codigo_producto"];
$Nombre_producto = $_POST["Nombre_producto"];
$Clasificacion = $_POST["Clasificacion"];
$Precio_adquisicion = $_POST["Precio_adquisicion"];
$Precio_venta =$_POST["Precio_venta"];

// sentencia sql
$sql = "update registro_producto set Nombre_producto='$Nombre_producto',Clasificacion='$Clasificacion',Precio_adquisicion='$Precio_adquisicion',
Precio_venta='$Precio_venta' where Codigo_producto = '$Codigo_producto';";

$resultado = mysqli_query($conexion,$sql);

if($resultado)
{
	echo '<script>alert("Registro Actualizado Satisfactoriamente")</script>';
	echo "<script>location.href='listado_productos.php'</script>";
}else{
	echo mysqli_error($conexion);
}

//cerrar la conexion
mysqli_close($conexion);

?>