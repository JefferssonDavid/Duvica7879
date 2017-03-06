
<?php 
    include("vistas/header.php");

    $conexion = mysqli_connect("127.0.0.1","root","","duvica7879");
    //variables que alimentaran la vista de los productos

    $numClientes=mysqli_num_rows(mysqli_query($conexion,"select * from registro_cliente;"));
    $numEmpleados=mysqli_num_rows(mysqli_query($conexion,"select * from registro_empleado;"));
    // es un puntero
    $numProductos= mysqli_num_rows(mysqli_query($conexion,"select * from registro_producto;"));

 ?>

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
                       <a href="#" target="blank">
                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <br> <div><font size="3">Facturacion</font></div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>


                    <br><br><br><br><br><br>
                        <ol class="breadcrumb">
                            <li class="active">
                                Sistema de Registro
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-group fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numClientes;?></div>
                                        <div>Clientes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="listado_clientes.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numEmpleados;?></div>
                                        <div>Personal</div>
                                    </div>
                                </div>
                            </div>
                            <a href="listado_empleados.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numProductos;?></div>
                                        <div>Inventario</div>
                                    </div>
                                </div>
                            </div>
                            <a href="listado_productos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                      
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
