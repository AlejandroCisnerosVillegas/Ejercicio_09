<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sistema de Listado de Alumnos con Promedios</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>
		<h1>Listar Alumnos</h1>
		<div align="center">
			<table>
				<tr>
					<th>Codigo</th>
					<th>Nombre y Apellido</th>
					<th>Aula</th>
					<th>P1</th>
					<th>P2</th>
					<th>P3</th>
					<th>EP</th>
					<th>EF</th>
					<th>PROMEDIO</th>
				</tr>
				<?php
				$conexion = mysqli_connect('localhost', 'root', '', 'general');

				$sql = "select CodAlumno, concat(NomAlumno, '  ', ApeAlumno) as Nombre,
					AulaAlumno, NotaP1, NotaP2, NotaP3, NotaEP, NotaEF, 
					round((NotaP1+NotaP2+NotaP3+NotaEP+NotaEF)/5, 0) as Promedio 
					from poject_10_alumnos";
				$resultado = mysqli_query($conexion, $sql);

				while ($mostrar = mysqli_fetch_array($resultado)) {
				?>
					<tr>
						<td><?php echo $mostrar['CodAlumno'] ?></td>
						<td><?php echo $mostrar['Nombre'] ?></td>
						<td><?php echo $mostrar['AulaAlumno'] ?></td>
						<td><?php echo $mostrar['NotaP1'] ?></td>
						<td><?php echo $mostrar['NotaP2'] ?></td>
						<td><?php echo $mostrar['NotaP3'] ?></td>
						<td><?php echo $mostrar['NotaEP'] ?></td>
						<td><?php echo $mostrar['NotaEF'] ?></td>
						<td><?php echo $mostrar['Promedio'] ?></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</body>
</html>