<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//Aca debera procesar los datos
		include"db.php";
		
		$datos = array(
			"Nombre" => filter_var($_POST["nombre"], FILTER_SANITIZE_SPECIAL_CHARS),
			"Precio" => $_POST["precio"],
			"Marca" => $_POST["marca"],
			"Categoria" => 1,
			"Detalle" => $_POST["detalle"],
			"Imagen" => "https://image.ibb.co/hK2VTT/sin_foto.jpg",
			"Stock" => $_POST["stock"]
		);
	
		
	if (Insertar($datos)) {
		header("location: index.php?rta=ok");
	} else {
		header("location: index.php?rta=error");
	}

	} else {
		//Aca debera mostrar el formulario
		include "../header.php";
?>

<div class="container">
	<h1>Agregar nuevo producto</h1>

	<form method="post" class="form-horizontal" enctype="multipart/form-data">

		<label class="control-label">Nombre:</label>
		<input class="form-control" type="text" name="nombre">

		<label class="control-label">Precio:</label>
		<input class="form-control" type="number" name="precio">

		<label class="control-label">Stock:</label>
		<input class="form-control" type="number" name="stock">

		<label class="control-label">Marca:</label>
		<input class="form-control" type="text" name="marca">

		<label class="control-label">Detalle:</label>
		<textarea class="form-control" rows="5" name="detalle"></textarea>
		
		<label class="control-label">Imagen:</label>
		<input type="file" name="imagen">
		
		<br>
		
		<button type="submit" class="btn btn-default">Guardar</button>

	</form>

</div>

<?php
		include "../footer.php";
	}
?>