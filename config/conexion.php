<?php

function conectarse(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "yamcajamarcadb";

    $conectar = new mysqli($servidor,$usuario,$password,$bd);

    return $conectar;
}

$conexion = conectarse();

?>