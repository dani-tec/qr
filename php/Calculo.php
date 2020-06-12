<?php 
$inc = include("con_db.php");
$Materia = $_POST['Calculo'];
if ($inc) {
	$consulta = "SELECT * FROM $Materia";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
		$Apellido_p = $row['Apellido_p'];
		$Apellido_m = $row['Apellido_m'];
	    $Nombre = $row['Nombre'];
	    $Asistencias = $row['Dia_1'];
	    ?>
        <div>
			<h2><?php echo $Nombre; ?><br></h2>
        	<div>
        		<p>
        			<b>Apellido_p: </b> <?php echo $Apellido_p ?><br>
					<b>Apellido_m: </b> <?php echo $Apellido_m ?><br>
					<b>Nombre: </b> <?php echo $Nombre ?><br>
        		    <b>Asistencias Registro: </b> <?php echo $Asistencias ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>
<html>
<div style="width:5%; height:100%">
        <button onclick="location.href='http://localhost/Proyecto/Materias-Alumno.html'">Regresar</button>
		</div >
		<link rel="stylesheet" href="estilos.css">

</html>