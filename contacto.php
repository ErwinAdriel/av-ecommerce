<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contacto | Avcomputing</title>
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
            <h1 class="h5">Inicio | Contacto</h1>
        </div>
	</div>
	<div class="container-fluid">
		<div class="py-5 text-center">
	        <h2>COMPLETAR</h2>
	    </div>
      
	    <div class="row">
	    	<div class="col-lg-2"></div>
	    	<div class="col-lg-8"> 
        <form action='consultar.php' mothod="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="firstName" name ="nombre" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" id="lastName" name = "apellido" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name = "email" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Telefono</label>
              <input type="number" class="form-control" id="address" name="telefono" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="mb-3">
              <label for="address2">Area de la empresa</label>
              <input type="text" class="form-control" id="address2" name = "area" placeholder="" value="" required="">
            </div>
            <div class="mb-3">
            	<label for="address2">Comentario</label>
            	<textarea class="form-control" id="exampleFormControlTextarea4" name = "comentario" rows="5"></textarea>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name = "consultar" type="submit">Consultar</button>
            </form>
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