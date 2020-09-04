<?php
  session_start();
  require_once("../../util.php");  

  $_GET["Relacion_id"] = htmlspecialchars($_GET["Relacion_id"]);

  if(isset($_GET["Relacion_id"])) {
      if (eliminarRolesUsuarios($_GET["Relacion_id"])) {
          $_SESSION["mensaje"] = "Se elimino un rol de un usuario";
      } else {
          $_SESSION["warning"] = "Ocurrió un error al eliminar un rol de un usuario";
      }
  }
  header("Status: 301 Moved Permanently");

  header("location:../../consultarRolesUsuario.php");
  exit;
?>