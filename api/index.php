<?php
	

	
	$productos = array(
		array('idProducto' => '1','Nombre' => 'Apple iPhone 6','Precio' => '499.99','Stock' => '500','Imagen' => 'https://image.ibb.co/j8Xx8T/P001.jpg'),
		array('idProducto' => '2','Nombre' => 'Apple iPad Pro','Precio' => '599.99','Stock' => '300','Imagen' => 'https://image.ibb.co/hMHm2o/P002.jpg'),
		array('idProducto' => '3','Nombre' => 'Google Nexus 7','Precio' => '299.99','Stock' => '300','Imagen' => 'https://image.ibb.co/jQVTF8/P003.jpg'),
		array('idProducto' => '4','Nombre' => 'Samsung Galaxy S7','Precio' => '459.99','Stock' => '650','Imagen' => 'https://image.ibb.co/dOjoF8/P004.jpg'),
		array('idProducto' => '5','Nombre' => 'Motorola Moto G','Precio' => '489.99','Stock' => '750','Imagen' => 'https://image.ibb.co/jgkH8T/P005.jpg'),
		array('idProducto' => '6','Nombre' => 'LG L40','Precio' => '199.69','Stock' => '350','Imagen' => 'https://image.ibb.co/kObPoT/P006.jpg'),
		array('idProducto' => '7','Nombre' => 'Apple Watch','Precio' => '199.69','Stock' => '350','Imagen' => 'https://image.ibb.co/mHT4oT/P007.jpg'),
		array('idProducto' => '8','Nombre' => 'HP Mini 110','Precio' => '399.89','Stock' => '400','Imagen' => 'https://image.ibb.co/hK2VTT/sin_foto.jpg')
	);


	$exclusivos = array(
		array('idProducto' => '10','Nombre' => 'Tigre baby','Precio' => '5499','Stock' => '4','Imagen' => 'https://image.ibb.co/hQpHMd/tigre.jpg'),
		array('idProducto' => '11','Nombre' => 'Pan lactal','Precio' => '20','Stock' => '98','Imagen' => 'https://image.ibb.co/iNvDuy/pan.jpg'),
		array('idProducto' => '12','Nombre' => 'Harina Extra Blanca','Precio' => '3699','Stock' => '154','Imagen' => 'https://image.ibb.co/fnQrgd/harina.jpg'),
	);


	header("Content-Type: application/json");

	if(isset($_GET["d"])){

		$data = $_GET["d"];

		switch ($data) {
			case 'productos':
				echo json_encode($productos);
			break;
			
			case 'exclusivos':
				echo json_encode($exclusivos);
			break; 

			default:
				echo json_encode( [ "error" => "Productos no encontrados"] );
			break;
		}

	}


?>