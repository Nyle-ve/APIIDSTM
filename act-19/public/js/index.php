<?php include "ProductController.php" ?>
<?php $productos = getProducts(); ?>
<?php include "BrandController.php" ?>
<?php $marcas = getBrands(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../layout/head.template.php" ?>
</head>
<body>
<?php include "../layout/navbar.template.php" ?>

<div class="container-fluid">
  <div class="row">
    <?php include "../layout/sidebar.template.php" ?>

    <div class="col-lg-10 col-sm-12">
      <div class="border-bottom">
        <div class="row m-2">
          <div class="col">
            <h5>Productos</h5>
          </div>
          <div class="col">
            <button class="btn btn-info float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Añadir
            </button>
          </div>
        </div>
      </div>

      <div class="row">
        <?php foreach($productos as $producto) { ?>
        <div class="col-md-3 col-sm-10 p-2">
          <div class="card" style="width: 18rem;">
            <img src=" <?php echo $producto->cover ?> " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?php echo $producto->name ?> </h5>
              <h6 class="card-subtitle mb-2 text-muted"> <?php echo $producto->brand->name ?> </h6>
              <p class="card-text"> <?php echo $producto->description ?> </p>
              <button id="editar" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Editar
              </button>
              <button id="eliminar" class="btn btn-danger" onclick="eliminar()">
                Eliminar
              </button>
              <a href="detalles.php" class="btn btn-info">Detalles</a>
            </div>
          </div>

        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div> 

<?php include "../layout/modalEditar.template.php" ?>
<?php include "../layout/scripts.template.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>