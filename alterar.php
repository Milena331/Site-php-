<?php 

include('conex.php');
include('session.php');


$email = $_SESSION ['email'];
$id= $_GET["id"];
$_SESSION ['email'];

$nome = $_POST["nome"];
$especie = $_POST["especie"];
$sexo = $_POST["sexo"];


$sql = mysqli_query($conn,"UPDATE  animais SET  nome = '$nome', especie = '$especie', sexo = '$sexo') 
where id= $id");



echo "<a href='menuAdote.php'>Voltar ao menu</a>";

?> 













<html lang="pt-br">

<head>
    <title>Alterar Animais</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cad.css">
</head>

<body>
    <div class="background">


        <div id="logo">

            <img src="https://pbs.twimg.com/media/FNTmiv4WQAEW2Zh?format=png&name=360x360">
        </div>
        <div id="tudo">
            <form action="alterar.php" method="POST">

                <h1>O que deseja alterar</h1><br><br>
                
               Nome: <input type="text" name="nome" placeholder="Digite o nome do pet"/><br/> <br>
               Especie:<input type="text" name="especie" placeholder="Digite gato/cao"/><br/> <br>
               Genero:<input type="text" name="sexo" placeholder="Digite femea/macho"/><br/> <br>
                
              
                <br>


                <button type="submit">Enviar</button>
            </form>

        </div>


</body>


</html>