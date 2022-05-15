<?php 

include('conex.php');
include('session.php');


$email = $_SESSION ['email'];
$id= $_GET["id"];
$_SESSION ['email'];

$sql = "DELETE FROM  animais WHERE id = '$id'";
$delete = $conn->query($sql);

 header('location: menuAdote.php');

?>