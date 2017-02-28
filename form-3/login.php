<?php
if(!isset($_SESSION['logueado_data']))
{
	if(isset($_POST['usuario'],$_POST['password']) and
	!empty($_POST['usuario']) and
	!empty($_POST['password']))
	{
		$usuario = 'antony'; //Usuario del login
		$password = 'jeffersson'; //Contraseña del login
		if($usuario == $_POST['usuario'] and $password == $_POST['password'])
		{
			$_SESSION['logueo_data'] = array('logueado' => true);
			header ('Location:../index1.html');
		}
		else
		{
			echo '<script>alert("El usuario o la clave es incorrecta...")</script>';
			echo "<script>location.href='index.html'</script>";
		}
	}
	else
	{
		echo '<script>alert("Los datos ingresados son invalidos..")</script>';
		echo "<script>location.href='index.html'</script>";
	}
}
else
{
	header('Location:index.html');
}
?>