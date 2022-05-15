<?php

const template_menu ="./menuAdote.html";

$usuario = "root";
$senha = "";
$database = "teste";
$host = "localhost";

$conn =mysqli_connect($host,$usuario,$senha,$database);
if($conn->error){
    die("Falha ao conectar ao banco".$mysqli->error);
}



?>