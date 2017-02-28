<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Duvica 7879</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" type="text/css" href="css/estilos_tabla.css">
</head>

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
$sql="select * from registro_producto;";

// es un puntero
$resultado=mysqli_query($conexion,$sql);
//IMPRIMIR EL ENCABEZADO DEL REPORTE Y DE LA TABLA
echo "<center><h1>LISTADO DE PRODUCTO</h1><center>";
echo "<table class='table' align='center' border='1'>";
echo "<tr>";
echo "<th>Codigo de Producto<th/>";
echo "<th>Nombre de Producto<th/>";
echo "<th>Clasificacion<th/>";
echo "<th>Precio de Adquisicion<th/>";
echo "<th>Precio de Venta<th/>";
echo "<th>Ajustes<th/>";
echo "</tr>";
    
//convertir resultado en un array o vector
//vector o arreglo numerico, con indice numerico
//$cliente=mysql_fetch_row($resultado

//CICLO PARA MOSTRAR LOS DATOS EN TABLA 

while($registro_producto=mysqli_fetch_array($resultado))
{
    echo "<tr>";
    //pase de parametros url get
    echo "<td>$registro_producto[0]<td/>";
    echo "<td>$registro_producto[1]<td/>";
    echo "<td>$registro_producto[2]<td/>";
    echo "<td>$registro_producto[3]<td/>";
    echo "<td>$registro_producto[4]<td/>";
    echo "<td><a href='borrar_producto.php?Codigo_producto=$registro_producto[0]'>Borrar
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
