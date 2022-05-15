<?php

include('session.php');
include('conex.php');
include('function.php');

$template = template(template_menu);

$pets=catalogo_pet();

$template = str_replace("<!--Lista_Pets-->",$pets['html'], $template);

echo $template;




?>