<?php 

$catColonia = $_POST['autoColonia'];

if (isset($catColonia) && !empty($catColonia)) {

	$db = new SQLite3("catalogos.db");


	$cs = $db -> query("SELECT cat_CodigoPostal, COUNT(cat_CodigoPostal) as Cuantos FROM cat_CpColonia WHERE cat_Colonia = '$catColonia' ;");
	while ($resul = $cs -> fetchArray()){
		if ($resul['Cuantos'] == 0) {
			echo "<input type='text' maxlength='5' pattern='[0-9]{5}' name='cbCodigoPost' id='cbCodigoPost' placeholder='Codigo Postal' autocomplete='on' class='form-control'/>";
		}else{
			echo "<input type='text' maxlength='5' pattern='[0-9]{5}' value='".$resul['cat_CodigoPostal']."' name='cbCodigoPost' id='cbCodigoPost' placeholder='Codigo Postal' autocomplete='on' class='form-control'/>";
		}
	}
	$db -> close();


}else{
	echo "<input type='text' maxlength='5' pattern='[0-9]{5}' name='cbCodigoPost' id='cbCodigoPost' placeholder='Codigo Postal' autocomplete='on'/>";
}


 ?>