<?php
  /*$fileCategorias = fopen('categorias.json', 'r');
  $fileMarcas = fopen('marcas.json', 'r');

  $contenidoJson = fread($fileCategorias, filesize('categorias.json'));
  $contenidoJson2 = fread($fileMarcas, filesize('marcas.json'));

  $contenidoArray = json_decode($contenidoJson);
  $contenidoArray2 = json_decode($contenidoJson2);*/

?>
<nav class="col-md-2 d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted border-bottom">
      <span>CATEGORIAS</span>
    </h6>
    <ul class="nav flex-column">
      <?php
        $fc = fopen('datos/categorias.json', 'r');
                $cArray = json_decode(fread($fc, filesize('datos/categorias.json')), true);
                fclose($fc);
                foreach ($cArray as $categoria) {
      ?>
          <li class='nav-item'><a class='nav-link active' href='productos.php?cat=<?php echo $categoria['id_categoria'];?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>'><?php echo $categoria['nombre'];?></a></li>
      <?php 
        }
      ?>
      <li class='nav-item'><a class='nav-link active' href='productos.php?cat=&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>'>Todos</a></li> 
    </ul>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted border-bottom">
      <span>FILTROS</span>
    </h6>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Marcas</span>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <?php
        $fm = fopen('datos/marcas.json', 'r');
                $mArray = json_decode(fread($fm, filesize('datos/marcas.json')), true);
                fclose($fm);
                foreach ($mArray as $marcas) {
        ?>
        <li class='nav-item'><a class='nav-link active text-danger' href='productos.php?marca=<?php echo $marcas['id_marca'];?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>'><?php echo $marcas['nombre'];?></a></li>

        <?php
            }
        ?>
        <li class='nav-item'><a class='nav-link active text-danger' href='productos.php?marca=&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>'>Todos</a></li>
      </li>
    </ul>
  </div>
</nav>