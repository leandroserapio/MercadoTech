<?php

function Conexion(){
	defined('SERVIDOR') or define('SERVIDOR', '127.0.0.1');
	defined('USUARIO') or define('USUARIO', 'root');
	defined('CLAVE') or define('CLAVE', null);
	defined('BASE_DE_DATOS') or define('BASE_DE_DATOS', 'mercado_tech');
	
	$conexion = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . BASE_DE_DATOS . ";charset=utf8", USUARIO, CLAVE);

	return $conexion;
}

function Insertar($producto){

	$conexion = Conexion();

	$insertar = $conexion->prepare("INSERT INTO productos (Nombre, Precio, Marca, Categoria, Detalle, Imagen, Stock) VALUES	(:n, :p, :m, :c, :d, :i, :s)");

	$insertar->bindParam(":n", $producto["Nombre"],    PDO::PARAM_STR);
	$insertar->bindParam(":p", $producto["Precio"],    PDO::PARAM_STR);
	$insertar->bindParam(":m", $producto["Marca"],     PDO::PARAM_INT);
	$insertar->bindParam(":c", $producto["Categoria"], PDO::PARAM_INT);
	$insertar->bindParam(":d", $producto["Detalle"],   PDO::PARAM_STR);
	$insertar->bindParam(":i", $producto["Imagen"],    PDO::PARAM_STR);
	$insertar->bindParam(":s", $producto["Stock"],     PDO::PARAM_INT);


		if( $insertar->execute() ){
			echo "Producto registrado correctamente";
		} else {
			echo "Ocurrio un error :(";
		}
}

function Actualizar($id, $producto){
		#3 Actualizar Datos
		
		$conexion = Conexion();

		$actualizar = $conexion->prepare("UPDATE productos SET Nombre = :n, Precio = :p, Marca = :m, Categoria = :c, Detalle =:d, Imagen = :i, Stock = :s  WHERE idProducto = :id");

		$actualizar->bindParam(":n", $producto["Nombre"],    PDO::PARAM_STR);
		$actualizar->bindParam(":p", $producto["Precio"],    PDO::PARAM_STR);
		$actualizar->bindParam(":m", $producto["Marca"],     PDO::PARAM_INT);
		$actualizar->bindParam(":c", $producto["Categoria"], PDO::PARAM_INT);
		$actualizar->bindParam(":d", $producto["Detalle"],   PDO::PARAM_STR);
		$actualizar->bindParam(":i", $producto["Imagen"],    PDO::PARAM_STR);
		$actualizar->bindParam(":s", $producto["Stock"],     PDO::PARAM_INT);
		$actualizar->bindParam(":id", $id, PDO::PARAM_INT);
		
		
		if ( $actualizar->execute() ) {
			echo "Producto actualizado correctamente!";
		} else {
			echo "Ocurrio un error :(";
		}
	
}

function Borrar(){

	$conexion = Conexion();


	$borrar = $conexion->prepare("DELETE FROM productos WHERE idProducto = :id");
	$borrar->bindParam(":id", $id, PDO::PARAM_INT);

	if ( $borrar->execute() ) {
		echo "Producto borrado correctamente!";
	} else {
		echo "Ocurrio un error :(";
	}
}

function Mostrar($id = 0){
	$conexion = Conexion();
	
	if ( $id == 0 ){

		$mostrar = $conexion->query("SELECT idProducto, Nombre, Precio, Detalle, Stock, Imagen FROM productos LIMIT 0,12");
		return $mostrar->fetchAll(PDO::FETCH_ASSOC);
		
	} else {	
		$mostrar = $conexion->prepare("SELECT idProducto, Nombre, Precio, Detalle, Stock, Imagen FROM productos WHERE idProducto = id");
		$mostrar->bindParam(":id", $id, PDO::PARAM_INT);		
		
		if($mostrar->execute() && $mostrar->rowCount() > 0 ) {
		return $mostrar->fetch(PDO::FETCH_ASSOC);
		} else{ 
		return "prodcuto no encontrado";
		}					
	}
	
} 	

//////// TESTEO DE LA LIBRERIA ////////
$datos = array(
	"Nombre" => "sansun khe",
	"Precio" => 699,
	"Marca" => 2,
	"Categoria" => 1,
	"Detalle" => "8gb RAM",
	"Imagen" => "kkhbjlak.jpg",
	"Stock" => 34567890,
);

//Agregar($datos);
//Actualizar(60, $datos);
//Borrar(60);


print_r(Mostrar(55));


?>