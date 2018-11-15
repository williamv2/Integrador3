<?php 

	include('conexion.php');

	$idevent = $_POST['del_idevent'];

	$con = new conexion;

		
		$delete = "DELETE FROM evento WHERE idevento = '$idevent'";

		$resultado = $con->consulta($delete);


		if(!$resultado){

			echo '<script>alert("Error al eliminar");
			window.history.go(-1);
			</script>';
		}
		else {
			
			echo '<script>alert("Evento eliminado exitosamente")</script>';
			echo "<script>window.location='./dashboard.php';</script>";
		}

		//cerrar conexion
		$con->cerrar();


 ?>