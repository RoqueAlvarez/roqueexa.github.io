<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de Producto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Captura de Producto</h2>
    <form action="index.php?controlador=producto&accion=capturar" method="POST">
        <div class="form-group">
            <label for="producto">Producto:</label>
            <input type="text" name="producto" id="producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Agregar Producto</button>
    </form>

    <h3>Listado de Productos</h3>
    <ul>
        <?php
        if (isset($_SESSION['productos'])) {
            foreach ($_SESSION['productos'] as $producto) {
                echo "<li>{$producto['producto']} - \${$producto['precio']}</li>";
            }
        }
        ?>
    </ul>
</div>
</body>
</html>
