<?php

if(!empty($_POST)){
	if(isset($_POST["user"]) &&isset($_POST["pass"]) &&isset($_POST["email"])){
		if($_POST["user"]!=""&& $_POST["pass"]!=""&&$_POST["email"]!=""){
			include "../php/conexion.php";
			
			$sql = "update usuario set user=\"$_POST[user]\",pass=\"$_POST[pass]\",email=\"$_POST[email]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../usuario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../usuario.php';</script>";

			}
		}
	}
}



?>