<?php
$con = new mysqli('localhost', 'root', '', 'formulario');

if ($con->connect_error){
    die("Falha ao conectar banco de dados: " .$con->connect_error);
}

?>