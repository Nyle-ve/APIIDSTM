<script>
    function eliminar(){
        swal({
        title: "Estás seguro?",
        text: "Una vez eliminado no puede deshacerse.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal("Se ha eliminado el producto", {
            icon: "success",
            });
        } else {
            swal("Acción cancelada");
        }
        });
    }

    function editar(){
        swal("Cambios guardados", "Se ha creado el producto correctamente!", "success");
    }
</script>