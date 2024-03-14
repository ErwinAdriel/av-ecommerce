<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos | Avcomputing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<?php
		require_once('menu.php');
	?>
	<div class="container">
		<div class="pt-3 pb-2 mb-3">
            <h1 class="h5">Inicio | Productos</h1>
        </div>
	</div>
	<div class="container-fluid">
      <div class="row">
        <?php
        	include_once('left-menu.php');
        ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="album py-5 bg-white">
	        <div class="container">
	          <div class="row">
	          	<?php
	          		
	          		$fp = fopen('datos/productos.json', 'r');
	          		$pArray = json_decode(fread($fp, filesize('datos/productos.json')), true);
	          		fclose($fp);
	          		foreach ($pArray as $producto) {

	          			$flagPrint = true;
	          			if(!empty($_GET['marca']) AND $flagPrint){
	          				if($_GET['marca'] == $producto['marca']){
	          					$flagPrint = true;
	          				}else{
	          					$flagPrint = false;
	          				}
	          			}

	          			if(!empty($_GET['cat']) AND $flagPrint){
	          				if($_GET['cat'] == $producto['categoria']){
	          					$flagPrint = true;
	          				}else{
	          					$flagPrint = false;
	          				}
	          			}

	          			if($flagPrint){
	          	?>
	            <div class="col-md-4">
	              <div class="card mb-4 shadow-sm">
	                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/<?php echo $producto['imagen']; ?>" display: block;">
	                <div class="card-body">
	                  <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>	
	                  <p class="card-text"><?php echo $producto['nombre']; ?></p>
	                  <div class="d-flex justify-content-between align-items-center">
	                    <div class="btn-group">
	                      	<a class="btn btn-sm btn-outline-secondary" href="producto_detalle.php?producto=<?php echo $producto['id_producto'];?>">Ver</a>
	                      	<button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
	                    </div>
	                    <small class="text-muted">$<?php echo $producto['precio'];?></small>
	                  </div>
	                </div>
	              </div>
	            </div>
	            
	            <?php
	        			}
	            	}
	            ?>
	          </div>
	        </div>
	      </div>
        </main>
      </div>
    </div>
	<?php
		include_once('footer.php');
	?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
</body>
</html>