<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<?php
	$recurso= $_REQUEST['recurso'];
	include("session.php");
	

	if (!$conexion) {
		echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
		echo "Errno de depuración: " . mysqli_connect_errno () . PHP_EOL;
		echo "Error de depuración: " . mysqli_connect_error () . PHP_EOL;
		exit;
	}else{
		include("session.php");
		$q= "SELECT * FROM recurso WHERE nom_recurso = '$recurso'";
		echo $q;
		$name = mysqli_query($conexion, $q);

		if(mysqli_num_rows($name)>0) {
			echo "hola";
		
		

			while ($result=mysqli_fetch_array($name)) {
			echo "hola";
			 echo "$result[nom_recurso]";

			}

		}
	}


			?>
			<!-- <div class="total">
				<form action="busquedabicisrobadas2.php" method="get">
					<br> <br>

					<select id="" name="Hora de devolucion" method="get" required>
						<option value="Hora de devolucion" selected="selected">- Hora de devolucion -</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
					</select>
					<input type="submit" value="Enviar"><br><br>
				</form>
			</div>
		</body>
		</html> -->