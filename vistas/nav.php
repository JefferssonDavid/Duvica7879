<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Duvica 7879</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrador <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#Advertancia"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion</a>
                                    <div class="modal fade" tabindex="-1" role="dialog" id="Advertencia">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
        <h4 class="modal-title">Advertencia </h4>
      </div>
      <div class="modal-body">
        <p>Apunto de cerrar sesion, Desea continuar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">continuar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index1.html"><i class="glyphicon glyphicon-home"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Registro <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                        	<li>
                        		<a href="Nuevo_modificar_eliminar_cliente.html">Registrar Cliente </a>
                        	</li>
                            <li>
                                <a href="Nuevo_modificar_eliminar_productos.html">Registrar Productos</a>
                            </li>
                            <li>
                                <a href="Nuevo_modificar_eliminar_empleado.html">Registrar Personal</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> Elaborar Informe Mensual</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
