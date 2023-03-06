<?php 
	$conexion=mysqli_connect('IP_Address','User','Password','DataBase_Name');
?>

<html>
<head>
<link rel="stylesheet" href="estilos.css">   
</head>
<body>
<h1>Listar alumnos</h1>

<div align="center">
	<table border="3">
		<tr id="tr1">
			<td>Codigo</td>
			<td>Nombre y Apellido</td>
			<td>Aula</td>
			<td>P1</td>	
			<td>P2</td>	
			<td>P3</td>	
			<td>EP</td>	
			<td>EF</td>
			<td>PROMEDIO</td>			
		</tr>

		<?php 
		$sql="select CodAlumno,concat(NomAlumno, '  ', ApeAlumno) as Nombre,
		AulaAlumno,NotaP1,NotaP2,NotaP3,NotaEP,NotaEF, 
		round((NotaP1+NotaP2+NotaP3+NotaEP+NotaEF)/5,0) as Promedio 
		from poject_10_alumnos";
		$resultado=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($resultado)){
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
