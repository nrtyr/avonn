<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$db = new SQLite3("catalogos.db");

$cs = $db -> query("SELECT * FROM cat_CpColonia WHERE cat_Colonia LIKE '%$_GET[term]%' ;");
	    
while($resul = $cs->fetchArray()) {
  $return_arr[] =  $resul['cat_Colonia'];
}
echo json_encode($return_arr);

$db -> close();



 ?>