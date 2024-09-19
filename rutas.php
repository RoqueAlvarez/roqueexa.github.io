<?php
require_once 'controladores/UsuarioController.php';
require_once 'controladores/ProductoController.php';

$controlador = isset($_GET['controlador']) ? $_GET['controlador'] : 'usuario';
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'mostrarFormularioLogin';

if ($controlador == 'usuario') {
    $usuarioController = new UsuarioController();
    if ($accion == 'registrar') {
        $usuarioController->registrar();
    } elseif ($accion == 'login') {
        $usuarioController->login();
    } else {
        $usuarioController->mostrarFormularioLogin();
    }
} elseif ($controlador == 'producto') {
    $productoController = new ProductoController();
    if ($accion == 'capturar') {
        $productoController->capturarProducto();
    } else {
        $productoController->mostrarFormularioCaptura();
    }
}
