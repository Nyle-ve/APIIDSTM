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

    function addProducto(){
        document.getElementById("oculto_input").value = "create";
    }
    function editProducto(target){
        document.getElementById("oculto_input").value = "update";

        let product = JSON.parse(target.getAttribute('data-product'));

        document.getElementById("name").value = product.name;
        document.getElementById("slug").value = product.slug;
        document.getElementById("description").value = product.description;
        document.getElementById("features").value = product.features;
        document.getElementById("brand").value = product.brand_id;
        document.getElementById("id").value = product.id;
    }
</script>