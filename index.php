<?php
session_start();
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];  // Inicializamos la lista de usuarios si no existe
}
require_once 'rutas.php';
