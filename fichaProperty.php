<?php session_start();

  /*-------------------------
  Autor: Jesús Caballero P.
  Web: www.integramosweb.pro
  Correo: uebeats@gmail.com
  ---------------------------*/

  if(!$_SESSION['user_system']){
    header('Location: login.php');
  }

  //Solicitamos Conexion
  require_once 'gt-config/conexion.php';
  
  //Solicitamos Funciones
  require_once 'model/functions.php';

  $titulo = "Panel Administración";
  $sidebar = "sidebar-collapse";

  $active_escritorio = "";
  $active_inmuebles = "active";
  $active_owner = "";
  $active_leaser = "";
  $active_pay = "";

  $id = $_GET['id_property'];
  $stmt = $con->prepare("SELECT * FROM tbl_property_system WHERE id_property = '$id'");
  $stmt->execute();
  // set the resulting array to associative
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $row = $stmt->fetch();
  
  include 'vistas/fichaProperty.view.php';
?>