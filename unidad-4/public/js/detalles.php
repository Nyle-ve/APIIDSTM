<?php 
    include 'ProductController.php';
    if (isset($_GET['slug'])) {
        $slug = $_GET['slug'];
        $producto = getProduct($slug);
    }
?>
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
            <button class="btn btn-info float-end">
              Añadir
            </button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-sm-10 p-2">
          <div class="card" style="width: 18rem;">
            <img src="<?= $producto->cover ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?= $producto->name ?> </h5>
              <h6 class="card-subtitle mb-2 text-muted"> <?php echo $producto->brand->name ?> </h6>
              <p class="card-text"> <?php echo $producto->description ?> </p>
              <ul>                            
                <?php foreach ($producto->tags as $tag) {?>
                <li> <?= $tag->name ?> </li>
                <?php } ?>
              </ul>
              <ul>                            
                <?php foreach ($producto->categories as $category) {?>
                <li> <?= $category->name ?> </li>
                <?php } ?>
              </ul>
              <button class="btn btn-warning">
                Editar
              </button>
              <button class="btn btn-danger">
                Eliminar
              </button>
              <a class="btn btn-info">Detalles</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  
</div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>