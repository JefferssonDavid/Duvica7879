<?php

// conexion al servidor
$conexion = mysqli_connect("127.0.0.1","root","");

//seleccionar la base de datos
$db = mysqli_select_db($conexion,"duvica7879");

//sentencia SQL
$sql = "select * from registro_producto where Codigo_producto ='$_GET[Codigo_producto]';";

// es un puntero
$resultado = mysqli_query($conexion,$sql);

// convertir en un array
$registro_producto = mysqli_fetch_assoc($resultado);

?>
<html>
<head>
<title>Producto</title>
</head>

<body>
<form method="post" action="actualizar_producto.php" name="formulario" id="formulario">
<table  align="center" border="1">
<tr>
<td colspan="2" align="center">Cliente</td>
</tr>

<tr>
<td>Codigo del Producto</td>
<td><input type="text" name="Codigo_producto" id="Codigo_producto" maxlength="15" size="15" readonly="readonly" value="<?php echo $registro_producto['Codigo_producto']; ?>"/></td>
</td><tr>
<td>Nombre del Producto</td>
<td><input type="text" name="Nombre_producto" id="Nombre_producto" maxlength="40" size="40" value="<?php echo $registro_producto['Nombre_producto']; ?>"/></td>
</tr>
<tr>
<td>Clasificacion</td>
<td><input type="text" name="Clasificacion" id="Clasificacion" maxlength="40" size="40" value="<?php echo $registro_producto['Clasificacion']; ?>"/></td>
</tr>
<tr>
<td>Precio de Adquisicion</td>
<td><input type="text" name="Precio_adquisicion" id="Precio_adquisicion" maxlength="40" size="40" value="<?php echo $registro_producto['Precio_adquisicion']; ?>"/></td>
</tr>
<tr>
<td>Precio de Venta</td>
<td><input type="text" name="Precio_venta" id="Precio_venta" maxlength="40" size="40" value="<?php echo $registro_producto['Precio_venta']; ?>"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Grabar"/>
<input type="reset" value="Limpiar"/></td>
</tr>
</table>
</form>
</body>
</html>

