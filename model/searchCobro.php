<?php
	/*-------------------------
	Autor: Jesús Caballero P.
	Web: integramosweb.pro
	Correo: web@integramosweb.pro
    ---------------------------*/

	//Solicitamos Conexion
	require_once('../gt-config/conexion.php');

	$datos['data'] = [];

	$key = $_POST['id_cobro_property'];

	//$query = "SELECT * FROM tbl_property_system ORDER BY name_owner ASC";
	$statement = $con->prepare("SELECT * FROM tbl_cobros_property WHERE id_cobro_property = '$key'");
	$statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    
    $datos['data'][] = $data;

	echo json_encode($data);

?>