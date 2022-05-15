<?php 

include('conex.php');
include('session.php');


$email = $_SESSION ['email'];
$id= $_GET["id"];
$_SESSION ['email'];
$sql = "SELECT * FROM  cadastro WHERE email = '$email'";
$result = $conn ->query($sql);

$cadastro = $result->fetch_assoc();
$idcadastro = $cadastro['id'];
echo $id;
echo $idcadastro;
 

$sql = "INSERT into adocao(id_pet,id_guardiao_do_pet) values ($id,$idcadastro)	";
$delete = $conn->query($sql);

 header('location: menuAdote.php');


?>

