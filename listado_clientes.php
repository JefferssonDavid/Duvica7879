<?php include("vistas/header.php") ?>

<?php
    //Sentencia IF para filtrar los datos de la tabla
    if (isset($_POST['search'])) {
        $searchValue= $_POST['searchInput'];
        $sql= "SELECT * FROM `registro_cliente` WHERE CONCAT(`Cedula`, `Nombres`, `Apellidos`, `Direccion`, `Fecha_de_Nacimiento`) LIKE '%".$searchValue."%'";
        $searchResult = filterTable($sql);
        //Captura el valor del input de busqueda y lo pasa como parametro para la sentencia SQL
    }
    else
    {
        $sql="select * from registro_cliente;";
        $searchResult = filterTable($sql);
        //Como el input de busqueda esta vacio, selecciona todos los registros de la BD
    }
     //Función que maneja la base de datos y envia la consulta SQL
    function filterTable($sql){
        // conexion al servidor
        $conexion = mysqli_connect("127.0.0.1","root","","duvica7879");
        $filterResult = mysqli_query($conexion,$sql);
        return $filterResult;
    }   


?>
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
           
            <form action="listado_clientes.php" method="post">
              <div class="input-group">
                <input type="text" class="form-control" name="searchInput" placeholder="Valor a buscar">
                <div class="input-group-btn">
                  <button class="btn btn-default" name="search" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
              
            <center><h1>LISTADO DE CLIENTES</h1><center>
            <table class='table display' id='tableList' align='center' border='1'>
                <thead>
                    <tr>
                        <th>Cédula<th/>
                        <th>Nombre<th/>
                        <th>Apellido<th/>
                        <th>Dirección<th/>
                        <th>Fecha de Nacimiento<th/>
                    </tr>
                </thead>
                <tbody>
                <!-- Bucle de llenado de tabla -->
                <?php while($registro_cliente=mysqli_fetch_array($searchResult)){?> 
                        <tr>
                        <td><?php echo $registro_cliente["Cedula"]; ?><td/><!-- Array asociativo -->
                        <td><?php echo $registro_cliente["Nombres"]; ?><td/>
                        <td><?php echo $registro_cliente["Apellidos"]; ?><td/>
                        <td><?php echo $registro_cliente["Direccion"]; ?><td/>
                        <td><?php echo $registro_cliente["Fecha_de_Nacimiento"]; ?><td/>
                        </tr>
                 <?php } ?>
                </tbody>
            </table>
          
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
