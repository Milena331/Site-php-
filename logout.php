<?php 

include('conex.php');
include('session.php');

session_start();
session_destroy();
header("location: log.html"); 



?>