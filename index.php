<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio | Avcomputing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<?php
		require_once('menu.php');
	?>
	<!--BANNER-->
	<div class="jumbotron banner_img">
		<div class="single_banner_slider">
			<div class="banner_text">
				<h1 class="display-4">Exclusivo!</h1>
				<p class="lead">Nuevo combo del mes.</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg" href="#" role="button">Ver</a>
				</p>
			</div>
		</div>
	</div>
	<!--PRODUCTOS DESTACADOS-->
	<div class="container-fluid">
		<div class="pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Destacados</h1>
        </div>
        <div class="row">
		<?php
      		
      		$fp = fopen('datos/productos.json', 'r');
      		$pArray = json_decode(fread($fp, filesize('datos/productos.json')), true);
			  fclose($fp);
			  
			$cantidad =0;

      		foreach ($pArray as $producto) {

      			if($producto['destacado'] == true){
				$cantidad++;
				if($cantidad == 11) break;
          	?>

		<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="producto_detalle.php?producto=<?php echo $producto['id_producto'];?>"><img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/<?php echo $producto['imagen']; ?>" display: block;"></a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>	
              <p class="card-text">$<?php echo $producto['precio']; ?></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
		
		<?php
       			}
        	}
        ?>

	</div>
	<!--INFO-->
	<div class="bg-white ">
		<div class="container marketing info">
			<div class="row">
		      <div class="col-lg-4">
		      	<h1>E</h1>
		        <h4>ENVIOS A TODO EL PAÍS</h4>
		        <p>Envios gratis a partir de $5000.</p>
		      </div><!-- /.col-lg-4 -->
		      <div class="col-lg-4">
		      	<h1>P</h1>
		        <h4>PROMOCIONES</h4>
		        <p>Beneficios exclusivos</p>
		      </div><!-- /.col-lg-4 -->
		      <div class="col-lg-4">
		        <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
		        <h4>3 CUOTAS SIN INTERÉS</h4>
		        <p>Con nuestros métodos de pago</p>
		      </div>
		    </div>
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