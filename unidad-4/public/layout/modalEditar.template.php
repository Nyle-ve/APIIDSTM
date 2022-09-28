<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="exampleInputPassword2">
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="editar()">Guardar</button>
      </div>
    </div>
  </div>
</div>