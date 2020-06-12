<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	
	<title>
		Login
	</title>
</head>


<?php

$conexion = mysqli_connect('localhost', 'root', '0987654321', 'bd_usuarios')or die (mysqli_connect_error());
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$consulta = "select * from tab_usuarios where usuario = '$usuario' and password ='$password'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);

echo 'usuario: ',$usuario;
echo $d."<br />";
echo 'password: ',$password;
if($filas>0){
	echo '<script>';
	echo 
		'swal({
		title: "BIENVENIDO",
		text: "!!Felicidades!!",
		icon: "success",
		button: "Ok",
		})
		.then((willDelete) => {
			window.location=("http://www.google.com");
			})
		';
	echo '</script>';
	} 
	else {
	echo '<script>';
	echo 'swal({
		title: "DATOS INCORRECTOS",
		text: "Intenta nuevamente",
		icon: "error",
		button: "Regresar",
		})
		.then((willDelete) => {
		window.location="http://localhost/proyecto/inicio.html";
		})
		';
	echo '</script>';
	}
?>

</html>
