<?php

require 'db.php';

$productos = Mostrar();


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
        
               /* if( ($i+1)%3 ==0 ){
                    $class = "grid-top-chain";
                }  else {
                    $class = null;
                }*/

                //operador ternario
                //$varialble = (condicion) ? VALOR_VERDADERO : VALOR_FALSO;
                $class = (($i+1) % 3 == 0  ) ? "grid-top-chain" : null;

        ?>

        <div class="col-sm-4 col-md-4 chain-grid <?php echo $class ?>">
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
        <h5 class="latest-product">PRODUCTOS EXCLUSIVOS</h5>   
        <a class="view-all" href="productos.html">VER TODOS<span></span></a>
    </div>
   
    <div class="product-left">

    <?php


       /* for($i = 0; $i < count($exclusivos); $i++){      
            //operador ternario
            //$varialble = (condicion) ? VALOR_VERDADERO : VALOR_FALSO;
            $class = (($i+1) % 3 == 0  ) ? "grid-top-chain" : null;
        */

        foreach($exclusivos as $exclusivo){

        

        ?>


        <!-- Producto #1 -->
        <div class="col-sm-4 col-md-4 <?php echo $class ?>">
            <a href="?p=producto&id=<?php echo $exclusivo->idProducto?>"><img class="img-responsive chain" src="<?php echo $exclusivo->Imagen ?>" alt=" " /></a>
            <span class="star"></span>
            <div class="grid-chain-bottom">
                <h6><a href="?p=producto&id=<?php echo $exclusivo->idProducto?>"><?php echo $exclusivo->Nombre ?></a></h6>
                    <div class="star-price">
                        <div class="dolor-grid"> 
                            <span class="actual">$ <?php echo $exclusivo->Precio ?></span>
                        </div>
                        <a class="now-get get-cart" href="?p=producto&id=<?php echo $exclusivo->idProducto?>">VER MÁS</a> 
                        <div class="clearfix"></div>
                       
                    </div>
            </div>
        </div>

         <?php } ?>

    </div>
            </section>  