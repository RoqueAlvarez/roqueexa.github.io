<?php
class UsuarioController {
    public function mostrarFormularioLogin() {
        require_once 'vistas/usuario/login.php';
    }

    public function login() {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];


        if ($usuario == 'admin' && $password == '1234') {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php?controlador=producto&accion=mostrarFormularioCaptura');
        } else {
            $error = "Usuario o contraseña incorrectos";
            require_once 'vistas/usuario/login.php';
        }
    }

    public function registrar() {
        require_once 'vistas/usuario/registro.php';
    }
}
