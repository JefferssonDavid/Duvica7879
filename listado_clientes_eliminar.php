<?php include("vistas/header.php") ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index1.html"><i class="glyphicon glyphicon-chevron-left"></i> Atras</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- /.navbar-collapse -->
        </nav>

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
$sql="select * from registro_cliente;";

// es un puntero
$resultado=mysqli_query($conexion,$sql);
//IMPRIMIR EL ENCABEZADO DEL REPORTE Y DE LA TABLA
echo "<center><h1>LISTADO DE CLIENTES</h1><center>";
echo "<table class='table' align='center' border='1'>";
echo "<tr>";
echo "<th>Cedula<th/>";
echo "<th>Nombre<th/>";
echo "<th>Apellido<th/>";
echo "<th>Direccion<th/>";
echo "<th>Fecha de Nacimiento<th/>";
echo "<th>Ajustes<th/>";
echo "</tr>";
    
//convertir resultado en un array o vector
//vector o arreglo numerico, con indice numerico
//$cliente=mysql_fetch_row($resultado

//CICLO PARA MOSTRAR LOS DATOS EN TABLA 

while($registro_cliente=mysqli_fetch_array($resultado))
{
    echo "<tr>";
    //pase de parametros url get
    echo "<td>$registro_cliente[0]<td/>";
    echo "<td>$registro_cliente[1]<td/>";
    echo "<td>$registro_cliente[2]<td/>";
    echo "<td>$registro_cliente[3]<td/>";
    echo "<td>$registro_cliente[4]<td/>";
    echo "<td><a href='borrar_cliente.php?Cedula=$registro_cliente[0]' onclick='return confirm(\"Desea eliminar este cliente? \"); '>Borrar
    &nbsp&nbsp<td/>";
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
