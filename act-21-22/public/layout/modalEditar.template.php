<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="./js/ProductController.php" method="POST">
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Categoría</label>
            <input type="text" class="form-control" name="slug" id="slug">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Características</label>
            <input type="text" class="form-control" name="features" id="features">
        </div>
        <div class="mb-3">
      <label for="exampleInput" class="form-label">Marca</label>
      <select id="brand" class="form-select">
        <?php foreach($marcas as $marca) { ?>
        <option> <?php echo $marca->name ?> </option>
        <?php } ?>
      </select>
        </div>
        <input type="hidden" name="action" value="create">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="editar()" name="action" value="create">Guardar</button>
      </div>
    </div>
  </div>
</div>