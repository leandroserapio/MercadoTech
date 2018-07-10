<?php
    //Array Secuencial
    //$producto = array("iPhone 6", 599.99, 600);
 
    //Array Asociativo
    // $producto = array(
    //  "nombre" => "iPhone 6",
    //  "precio" => 599.99,
    //  "stock" => 600
    // );
 
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
     
 
    //print_r( $producto );
 
 
?>
<section id="page">
                <!-- PRODUCTOS DESTACADOS -->
<div class="shoes-grid">
    <div class="products">
        <h5 class="latest-product">PRODUCTOS DESTACADOS</h5>
    </div>
    <div class="product-left">
        
        
        <!-- Producto #1 -->
        
        <?php
        
        for($i = 0; $i < count($productos); $i++){ 
            
        ?>
        
        <div class="col-sm-4 col-md-4 chain-grid">
           <a href="?p=producto&id=<?php echo $productos[$i]["idProducto"]?>"><img class="img-responsive chain" src="<?php echo $productos[$i]["Imagen"] ?>" alt="" /></a>
            <div class="grid-chain-bottom">
                <h6><a href="?p=producto&id=<?php echo $productos[$i]["idProducto"]?>"><?php echo $productos[$i]["Nombre"] ?></a></h6>
                <div class="star-price">
                    <div class="dolor-grid"> 
                        <span class="actual">$<?php echo $productos[$i]["Precio"] ?></span>
                    </div>
                    <a class="now-get get-cart" href="?p=producto&id=<?php echo $productos[$i]["idProducto"]?>">VER MÁS</a> 
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        
        
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- ULTIMOS PRODUCTOS -->
<div class="shoes-grid">
    <div class="products">
        <h5 class="latest-product">ULTIMOS PRODUCTOS</h5>   
        <a class="view-all" href="productos.html">VER TODOS<span></span></a>
    </div>
    <div class="product-left">
        <!-- Producto #1 -->
        <div class="col-sm-4 col-md-4 chain-grid">
            <a href="producto.html"><img class="img-responsive chain" src="images/productos/P004.jpg" alt=" " /></a>
            <span class="star"></span>
            <div class="grid-chain-bottom">
                <h6><a href="producto.html">Lorem ipsum dolor #1</a></h6>
                <div class="star-price">
                    <div class="dolor-grid"> 
                        <span class="actual">$300</span>
                    </div>
                    <a class="now-get get-cart" href="producto.html">VER MÁS</a> 
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Producto #2 -->
        <div class="col-sm-4 col-md-4 chain-grid">
            <a href="producto.html"><img class="img-responsive chain" src="images/productos/P005.jpg" alt=" " /></a>
            <span class="star"></span>
            <div class="grid-chain-bottom">
                <h6><a href="producto.html">Lorem ipsum dolor #2</a></h6>
                <div class="star-price">
                    <div class="dolor-grid"> 
                        <span class="actual">$300</span>
                    </div>
                    <a class="now-get get-cart" href="producto.html">VER MÁS</a> 
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Producto #3 -->
        <div class="col-sm-4 col-md-4 chain-grid grid-top-chain">
            <a href="producto.html"><img class="img-responsive chain" src="images/productos/P006.jpg" alt=" " /></a>
            <span class="star"></span>
            <div class="grid-chain-bottom">
                <h6><a href="producto.html">Lorem ipsum dolor #3</a></h6>
                <div class="star-price">
                    <div class="dolor-grid"> 
                        <span class="actual">$300</span>
                    </div>
                    <a class="now-get get-cart" href="producto.html">VER MÁS</a> 
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"> </div>
</div>
            </section>












            <?php
    //Si NO existe...
    if( !isset($_GET["id"]) )
        header("location: index.php");
     
    $id = $_GET["id"];  
 
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
    //Obtengo la posicion del item cuyo idProducto es igual al id enviado por GET
    $item = array_search($id, array_column($productos, "idProducto") );
 
    $elegido = $productos[$item];
     
    echo "El producto elegido es: ";
    print_r( $elegido );
 
?>
<section id="page">
                <div class="single_top">
    <div class="single_grid">
        <div class="grid images_3_of_2">
            <ul id="etalage">
                <li>
                    <img class="etalage_thumb_image" src="images/productos/P001.jpg" class="img-responsive" />
                </li>
            </ul>
            <div class="clearfix"></div>        
        </div>
        <div class="desc1 span_3_of_2">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
            <div class="cart-b">
                <div class="left-n ">$329.58</div>
                <a class="now-get get-cart-in" href="#">COMPRAR</a> 
                <div class="clearfix"></div>
            </div>
            <h6>100 unid. en stock</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="share">
                <h5>Compartir Producto:</h5>
                <ul class="share_nav">
                    <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                    <li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
                    <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                    <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
            </section>