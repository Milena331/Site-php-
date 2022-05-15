<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{

    include_once('conex.php');
    $email = $_POST['email'];
    
    $senha = $_POST['senha'];
   // print_r('email: '. $email);
    //print_r('senha: '. $senha);
//acessa

$sql = "SELECT * FROM  cadastro WHERE email = '$email' AND senha = '$senha'";
$result = $conn ->query($sql);

//print_r($sql);
//print_r($result);
if(mysqli_num_rows($result)<1)
{
    // print_r('NÃO existe');
    header('location: log.html');
}

else{
   // print_r('existe');
   $_SESSION['email'] = $email;
    header('location: menuAdote.php');
}
}

else
{
    header('location: log.html');
}


?>