<?php 




function template($template){

  $html = file_get_contents($template);
  return $html;

}


function catalogo_pet() {
	$html = "";
	$qtd = 0;
	$pets = db_select_animais();
	foreach($pets as $pet) {
		if ($pet['nome'] != "") {
			$html .= pet_card($pet['nome'], $pet['especie'], $pet['sexo'],$pet['id']);
			$qtd ++;
		}
	}
	return array("quantidade" => $qtd, "html" => $html);
	
}
function db_select_animais() {
	// referencia de get_result do comentario em 
	// https://www.php.net/manual/pt_BR/mysqli.prepare.php#107568

	global $conn;
	$sql = "select an.* from animais an left join adocao ad on an.id=ad.id_pet where ad.id_pet is null ";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	$registros = $result->fetch_all(MYSQLI_ASSOC);
	return $registros;
	
}


function pet_card($nome,$especie,$sexo,$id){
  $figura = array();
  $figura['cao'] = "https://pbs.twimg.com/media/FSpylTpXoAc8PIs?format=jpg&name=small";
  $figura['gato'] = "https://pbs.twimg.com/media/FSpuMa2WIAEpRlQ?format=jpg&name=small";
  $link = $figura[$especie];
  $html= "";
  $html.="
  <a href=\"adotar.php?id=$id\">Adote</a>&nbsp;
  <a href=\"delete.php?id=$id\">Delete</a>&nbsp;
  <a href=\"alterar.php?id=$id\">Altere</a>
 

  <div class=\"card\">
    <h2 class=\"card-title\">$nome</h2>
    <img src=\"$link\">
	<figcaption>
	<p>$especie <br>$sexo <br>O id é : $id</p>
			</figcaption>
    
			
  </div>";
  
  
  return $html;
}





?>