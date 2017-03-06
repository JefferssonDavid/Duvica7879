<?php include("vistas/header.php") ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("vistas/nav.php") ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            DUVICA 7879 <small></small>
                        </h1>
                </div>

        <div class="php">


<?php
// conexion al servidor
$conexion = mysqli_connect("127.0.0.1","root","");

//seleccionar la base de datos
$db = mysqli_select_db($conexion,"duvica7879");

//sentencia SQL
$sql="select * from registro_empleado;";

// es un puntero
$resultado=mysqli_query($conexion,$sql);
//IMPRIMIR EL ENCABEZADO DEL REPORTE Y DE LA TABLA
echo "<center><h1>LISTADO DE EMPLEADO</h1><center>";
echo "<table class='table' align='center' border='1'>";
echo "<tr>";
echo "<th>Cedula<th/>";
echo "<th>Nombres<th/>";
echo "<th>Apellido<th/>";
echo "<th>Direccion<th/>";
echo "<th>Cargo<th/>";
echo "<th>Fecha de Nacimiento<th/>";
echo "<th>Ajustes<th/>";
echo "</tr>";
    
//convertir resultado en un array o vector
//vector o arreglo numerico, con indice numerico
//$cliente=mysql_fetch_row($resultado

//CICLO PARA MOSTRAR LOS DATOS EN TABLA 

while($registro_empleado=mysqli_fetch_array($resultado))
{
    echo "<tr>";
    //pase de parametros url get
    echo "<td>$registro_empleado[0]<td/>";
    echo "<td>$registro_empleado[1]<td/>";
    echo "<td>$registro_empleado[2]<td/>";
    echo "<td>$registro_empleado[3]<td/>";
    echo "<td>$registro_empleado[4]<td/>";
    echo "<td>$registro_empleado[5]<td/>";
    echo "<td><a href='borrar_empleado.php?Cedula=$registro_empleado[0]' onclick='return confirm(\"Desea eliminar este empleado?\"); '>Eliminar<td/>";
    echo "</tr>";
}
echo '</table>';

//cerrar la conexion
mysqli_close($conexion);
?>

                   
                      
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
