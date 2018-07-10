<?php
	$exclusivos = array(
		array('idProducto' => '1','Nombre' => 'Tigre baby','Precio' => '5499','Stock' => '4','Imagen' => 'https://image.ibb.co/hQpHMd/tigre.jpg'),
		array('idProducto' => '2','Nombre' => 'Pan lactal','Precio' => '20','Stock' => '98','Imagen' => 'https://image.ibb.co/iNvDuy/pan.jpg'),
		array('idProducto' => '3','Nombre' => 'Harina Extra Blanca','Precio' => '3699','Stock' => '154','Imagen' => 'https://image.ibb.co/fnQrgd/harina.jpg'),
	);

	header("Content-Type: application/json");
	echo json_encode($exclusivos);

?>