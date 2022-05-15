<?php include('conex.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

if (empty($nome)){
    header('location: cad.html');
    die();
}
if (empty($email)){
    header('location: cad.html');
    die();
}if (empty($senha)){
    header('location: cad.html');
    die();
}else {




$sql = mysqli_query($conn,"INSERT INTO  cadastro (nome,email,telefone,senha) 
VALUES('$nome','$email','$telefone','$senha')");


echo "<a href='log.html'>Voltar ao início</a>";
}
?>