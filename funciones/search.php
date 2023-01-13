<?php
session_start();
$search = json_decode(file_get_contents('php://input'), true);
$codigo=$search['search'];
$_SESSION['search_result'] = "Buscaste por: " . $codigo;
//echo $_SESSION['search_result'];
include 'funciones.php';
  buscarProducto($codigo);
?>
