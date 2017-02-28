<?php

// conexion al servidor
$conexion = mysqli_connect("127.0.0.1","root","");

//seleccionar la base de datos
$db = mysqli_select_db($conexion,"duvica7879");

//sentencia SQL
$sql = "select * from registro_empleado where Cedula ='$_GET[Cedula]';";

// es un puntero
$resultado = mysqli_query($conexion,$sql);

// convertir en un array
$registro_empleado = mysqli_fetch_assoc($resultado);

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
<td>Cedula</td>
<td><input type="text" name="Cedula" id="Cedula" maxlength="15" size="15" readonly="readonly" value="<?php echo $registro_empleado['Cedula']; ?>"/></td>
</td><tr>
<td>Nombres</td>
<td><input type="text" name="Nombres" id="Nombres" maxlength="40" size="40" value="<?php echo $registro_empleado['Nombres']; ?>"/></td>
</tr>
<tr>
<td>Apellidos</td>
<td><input type="text" name="Apellidos" id="Apellidos" maxlength="40" size="40" value="<?php echo $registro_empleado['Apellidos']; ?>"/></td>
</tr>
<tr>
<td>Direccion</td>
<td><input type="text" name="Direccion" id="Direccion" maxlength="40" size="40" value="<?php echo $registro_empleado['Direccion']; ?>"/></td>
</tr>
<tr>
<td>Cargo</td>
<td><input type="text" name="Cargo" id="Cargo" maxlength="40" size="40" value="<?php echo $registro_empleado['Cargo']; ?>"/></td>
</tr>
<tr>
<td>Fecha de Nacimiento</td>
<td><input type="text" name="Fecha_de_Nacimiento" id="Fecha_de_Nacimiento" maxlength="40" size="40" value="<?php echo $registro_empleado['Fecha_de_Nacimiento']; ?>"/></td>
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

