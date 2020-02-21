<!DOCTYPE html>
<html lang="en">
<head>
  <title>Descarga de Reporte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Reporte Servicio al cliente</h2>
<p>Reporte detallado Encuesta de Servicio al Cliente</p> 
<?php   
    include "../includes/conect.php";
    $sql = "SELECT * FROM calificacion";
    $query = $con->query($sql);    
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Cedula Contratante</th>
	<th>¿Como te sentiste con nosotros?</th>
	<th>¿Que te gustaría recibir de nosotros?</th>
	<th>¿Que tan probable es que nos recomiendes con un familiar o amigo? (Escala de 0 a 5)</th>
</thead>
<?php while ($row=$query->fetch_array()):?>
<tr>
	<td><?php echo utf8_encode($row["id_cliente"]); ?></td>
	<td><?php echo utf8_encode($row["opinionOne"]); ?></td>
	<td><?php echo utf8_encode($row["opinionTwo"]); ?></td>
	<td><?php echo utf8_encode($row["raiting"]); ?></td>	
</tr>

<?php endwhile;?>
</table>
<a href="export.php"> <button class="btn btn-success">Descargar Excel</button></a>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

</div>

</body>
</html>
