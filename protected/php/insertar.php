<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");


if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtClvElec']) && !empty($_POST['txtClvElec'])) {

$nombreVar = "";
$txtAPater = "";
$txtAMater = "";
$txtFehaNa = "";
$cbSexo = "";
$txtTelCasa = "";
$txtTelCel = "";
$txtSecc = "";
$txtCalle = "";
$txtNoExt = "";
$txtNoInt = "";
$txtColonia = "";
$cbCodigoPost = "";
$cbMunicipio = "";
$txtClvElec = "";


$txtNombre = mb_strtoupper($_POST['txtNombre'], 'UTF-8');
$txtAPater = mb_strtoupper($_POST['txtAPater'], 'UTF-8');
$txtAMater = mb_strtoupper($_POST['txtAMater'], 'UTF-8');	
$txtFehaNa = mb_strtoupper($_POST['txtFehaNa'], 'UTF-8');	
$cbSexo = mb_strtoupper($_POST['cbSexo'], 'UTF-8');	
$txtTelCasa = mb_strtoupper($_POST['txtTelCasa'], 'UTF-8');	
$txtTelCel = mb_strtoupper($_POST['txtTelCel'], 'UTF-8');	
$txtSecc = mb_strtoupper($_POST['txtSecc'], 'UTF-8');		
$txtCalle = mb_strtoupper($_POST['txtCalle'], 'UTF-8');	
$txtNoExt = mb_strtoupper($_POST['txtNoExt'], 'UTF-8');	
$txtNoInt = mb_strtoupper($_POST['txtNoInt'], 'UTF-8');	
$txtColonia = mb_strtoupper($_POST['txtColonia'], 'UTF-8');	
$cbCodigoPost = mb_strtoupper($_POST['cbCodigoPost'], 'UTF-8');	
$cbMunicipio = mb_strtoupper($_POST['cbMunicipio'], 'UTF-8');	
$txtClvElec = mb_strtoupper($_POST['txtClvElec'], 'UTF-8');	


$con = new SQlite3("../data/datos.db") or die("Problemas para contectar DB!");

$cs = $con -> query("INSERT INTO capturas (nombre,aPat,aMat,FechaNa,sexo,telUno,telDos,secc,calle,noExt,noInt,colonia,codPost,muni,clvElect) VALUES ('$txtNombre','$txtAPater','$txtAMater','$txtFehaNa','$cbSexo','$txtTelCasa','$txtTelCel','$txtSecc','$txtCalle','$txtNoExt','$txtNoInt','$txtColonia','$cbCodigoPost','$cbMunicipio','$txtClvElec')");

$con -> close();

echo "<script> alert('Datos Insertados!'); </script>";
echo "<script> window.location='../../index.php'; </script>";



	
}else{
	echo "<script> alert('Falta Nombre o Clave de Elector!'); </script>";
	echo "<script> window.location='../../index.php'; </script>";
}




 ?>