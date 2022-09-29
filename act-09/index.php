<?php include "app/AuthController.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "public/layout/head.template.php" ?>
</head>
<body>
    <div class="container bg-dark text-white mt-3">
    <form action="app/AuthController.php" method="POST" class="row align-items-start">
    <div class="mb-3 col">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su correo">
    </div>
    <div class="mb-3 col">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la contraseña">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="hidden" name="action" value="access">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>