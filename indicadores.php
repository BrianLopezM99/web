<?php

session_start();
$idUsuario = $_SESSION["datosUsuario"]["id"];
echo $idUsuario;
include ("conexion.php");
$statement = "SELECT idUsuario, paquete, lugares FROM usuarios_paquetes WHERE idUsuario = $idUsuario";
$resultado = $ConexionBD->query($statement);

$compras = array();
while($fila = mysqli_fetch_assoc($resultado)){
    $compras[] = $fila;
}

echo json_encode($compras);

?>