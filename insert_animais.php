<?php include('conex.php');

$nome = $_POST["nome"];
$especie = $_POST["especie"];
$sexo = $_POST["sexo"];

if (empty($nome)){
    header('location: insert_animais.html');
    die();
}
if (empty($especie)){
    header('location: insert_animais.html');
    die();
}if (empty($sexo)){
    header('location: insert_animais.html');
    die();
}else {


$sql = mysqli_query($conn,"INSERT INTO  animais (nome,especie,sexo) 
VALUES('$nome','$especie','$sexo')");




echo "<a href='menuAdote.php'>Voltar ao menu</a>";
}
?>