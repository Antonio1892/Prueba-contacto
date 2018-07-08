<?php

if(!empty($_GET)){
			include "../php/conexion.php";
			
			$sql = "DELETE FROM usuario WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../usuario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../usuario.php';</script>";

			}
}

?>