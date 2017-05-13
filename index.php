<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Anteción Ciudadana</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
	function ejecutarAjax(){
		var conexion;
		var ctColonia = document.getElementById("autoColonia").value;
		var valor = "autoColonia="+ctColonia;


		if (window.XMLHttpRequest) {
			conexion = new XMLHttpRequest();
		}else{
			conexion = new ActiveXObject("Microsoft.XMLHTTP");
		}

		conexion.onreadystatechange=function(){
			if (conexion.readyState==4 && conexion.status==200) {
				document.getElementById("CodPost").innerHTML = conexion.responseText;
			}
		}
		conexion.open("POST","protected/php/codigosPost.php",true);
		conexion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		conexion.send(valor);
	}
	</script>
	<style>
		input[type=text]{
			text-transform: uppercase;
		}
	</style>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 panel panel-success">
			<h1>AVONN</h1>
			<br>
			<form action="protected/php/insertar.php" method="post">
			 <div class="form-group">
					
					<input type="text" name="txtNombre" placeholder="Nombre" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" name="txtAPater" placeholder="Apellido Paterno" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" name="txtAMater" placeholder="Apellido Materno" autocomplete="on" class="form-control"/>
					<br>
					<input type="date" name="txtFehaNa" placeholder="Fecha de nacimiento" autocomplete="on" class="form-control"/>
					<br>
					<select name="cbSexo" id="" class="form-control">
						<option value="H">Hombre</option>
						<option value="M">Mujer</option>
					</select>
					<br>
					<input type="text" maxlength="10" pattern="[0-9]{8,10}" name="txtTelCasa" placeholder="Teléfono 'Casa o Móvil'" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" maxlength="10" pattern="[0-9]{8,10}" name="txtTelCel" placeholder="Otro Teléfono" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" maxlength="4" pattern="[0-9]{4}" name="txtSecc" placeholder="Sección Electoral" id="autoSeccion" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" name="txtCalle" placeholder="Calle" id="autoCalle" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" name="txtNoExt" placeholder="No Ext" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" name="txtNoInt" placeholder="No Int" autocomplete="on" class="form-control"/>
					<br>
					<input type="text" name="txtColonia" placeholder="Colonia" id="autoColonia" onfocusout="ejecutarAjax()" autocomplete="on" class="form-control"/>
					<br>
					<div id="CodPost">
					<input type="text" maxlength="5" pattern="[0-9]{5}" name="cbCodigoPost" id="cbCodigoPost" placeholder="Código Postal" autocomplete="on" class="form-control"/>
					</div>
					<br>
					<select name="cbMunicipio" id="" class="form-control">
						<option value="Nicolás Romero">Nicolás Romero</option>
					</select>
					<br>
					<!-- <input type="text" name="txtFolio" placeholder="Folio C.E." autocomplete="on" class="form-control"/>
					<br> -->
					<input type="text" name="txtClvElec" placeholder="Clave de Elector" autocomplete="on" class="form-control"/>
					<br>
					<input type="submit" value="Guardar" class="btn btn-success btn-lg btn-block"/>
			</div>	

			</form>
		</div>
	</div>
</div>

<!-- ######## Aqui comienza Autocompletado ############ -->
    	
<script>
$( "#autoCalle" ).autocomplete({
  source: "protected/php/calles.php"
});

$( "#autoColonia" ).autocomplete({
  source: "protected/php/colonias.php"
});

$( "#autoSeccion" ).autocomplete({
  source: "protected/php/secciones.php"
});

$( "#cbCodigoPost" ).autocomplete({
  source: "protected/php/codigos.php"
});
</script>

<!-- ######## Aqui comienza Autocompletado ############ -->



</body>
</html>