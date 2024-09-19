<?php
class ProductoController {
    public function mostrarFormularioCaptura() {
        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?controlador=usuario&accion=mostrarFormularioLogin');
        }
        require_once 'vistas/producto/captura_producto.php';
    }

    public function capturarProducto() {
        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?controlador=usuario&accion=mostrarFormularioLogin');
        }

        $producto = $_POST['producto'];
        $precio = $_POST['precio'];

        if (!empty($producto) && is_numeric($precio)) {
            $_SESSION['productos'][] = ['producto' => $producto, 'precio' => $precio];
        }

        require_once 'vistas/producto/captura_producto.php';
    }
}
