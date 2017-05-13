<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$db = new SQLite3("catalogos.db");

$cs = $db -> query("SELECT cat_CodigoPostal FROM cat_CpColonia WHERE cat_CodigoPostal LIKE '%$_GET[term]%' GROUP BY cat_CodigoPostal ORDER BY cat_CodigoPostal ;");
	    
while($resul = $cs->fetchArray()) {
  $return_arr[] =  $resul['cat_CodigoPostal'];
}
echo json_encode($return_arr);

$db -> close();



 ?>