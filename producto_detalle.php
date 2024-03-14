<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Producto | Avcomputing</title>
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
            <h1 class="h5">Inicio | Producto | Remera rever pass</h1>
        </div>
	</div>
	<div class="container-fluid">
      <div class="row">
        <?php
        	include_once('left-menu.php');
        ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        	<div class="row">
        	<?php
				if(isset($_POST['comentar'])){
					$data = $_POST;
					unset($data['comentar']);
					$fecha = new DateTime();
					$indexComentario = $fecha->format('YmdHisu');
					$data['fecha'] = date('d/m/Y H:i:s');
					if(file_exists('datos/comentarios.json')){
						$comentarioJson = file_get_contents('datos/comentarios.json');
						$comentarioArray = json_decode($comentarioJson, true);
					}else{
						$comentarioArray = array();
					}

					$comentarioArray[$indexComentario] = $data;
					$fp = fopen('datos/comentarios.json', 'w');
					fwrite($fp, json_encode($comentarioArray));
					fclose($fp);

        			//var_dump($data);
        		}
        	?>
    		<?php
          		
          		$fp = fopen('datos/productos.json', 'r');
          		$pArray = json_decode(fread($fp, filesize('datos/productos.json')), true);
          		fclose($fp);
          		foreach ($pArray as $producto) {
          			if($producto['id_producto'] == $_GET['producto']){
          				break;
          			}
          		}
          	?>

		        <div class="col-md-12">
		          <div class="card flex-md-row mb-8 shadow-sm h-md-500">
		          	<img class="card-img-right flex-auto d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="img/<?php echo $producto['imagen'];?>" data-holder-rendered="true" style="width: 500px; height: 500px;">
		            <div class="card-body d-flex flex-column">
            		  <h3 class="mb-5 titulo">
            		  	<p class="text-primary"><?php echo $producto['nombre'];?></p>
		              </h3>
		              <strong class="d-inline-block mb-3 text-dark">$<?php echo $producto['precio'];?></strong>
		              <div class="mb-3 text-muted">Marca: <?php echo $producto['marca'];?></div>
		              <div class="mb-5 text-muted">Modelo: <?php echo $producto['modelo'];?></div>
		              <p class="card-text mb-auto"><?php echo $producto['descripcion'];?></p>
		              <button type="button" class="mt-4 btn btn-sm btn-outline-secondary">Comprar</button>
		            </div>
		          </div>
		        </div>
	        </div>
	        <div class="row mb-2 mt-5">
		        <div class="comentarios col-md-6">
		        	<?php
		        		if(file_exists('datos/comentarios.json')){
							$comentarioJson = file_get_contents('datos/comentarios.json');
							$comentarioArray = json_decode($comentarioJson, true);
							krsort($comentarioArray);
							$cantidad = 0;
							foreach ($comentarioArray as $comentario) {
								if($comentario['id_producto'] == $_GET['producto']){
									$cantidad++;
									if($cantidad == 11) break;
					?>
					
		          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">
		              <h3 class="mb-0">
		                <a class="text-primary" href="#"><?php echo $comentario['email'];?></a>
		              </h3>
		              <div class="mb-1 text-muted"><?php echo $comentario['fecha'];?></div>
		              <p class="card-text mb-auto"><?php echo $comentario['descripcion'];?></p>
		            </div>
		          </div>
		         	<?php									
		         				}
							}					
						}
		        	?>
		        </div>
		        <div class="col-md-6">
		          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">
		              <h3 class="mb-0">
		              	<p class="hola">Comentar</p>
		              </h3>
		              <!--<div class="mb-1 text-muted">Nov 11</div>
		              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		              <a href="#">Continue reading</a>-->
		              <form action="" method="post">
						  <div class="form-row">
						    <div class="form-group col-lg-12">
						      <label for="inputEmail4">Email</label>
						      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="select" name="rankeo" >Calificar</label>
						    <select class="custom-select">
							  <option selected>Seleccionar</option>
							  <option value="1">*</option>
							  <option value="2">**</option>
							  <option value="3">***</option>
							  <option value="4">****</option>
							  <option value="5">*****</option>
							</select>
						  </div>
						  <div class="form-group">
						    <label for="textarea">Comentar</label>
						      <textarea class="form-control" id="exampleFormControlTextarea4" name="descripcion" rows="3"></textarea>
						  </div>
						  <input type="hidden" class="form-control" name="id_producto" value="<?php echo $_GET['producto']?>">
						  <button type="submit" class="btn btn-primary" name="comentar">Enviar</button>
						</form>
		            </div>
		          </div>
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