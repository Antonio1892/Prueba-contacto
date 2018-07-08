<?php

if(!empty($_POST)){
	if(isset($_POST["Nombre"]) &&isset($_POST["Apellidos"]) &&isset($_POST["Redes"]) &&isset($_POST["Telefono"]) &&isset($_POST["Direccion"])){
		if($_POST["Nombre"]!=""&& $_POST["Apellidos"]!=""&&$_POST["Telefono"]!=""){
			include "conexion.php";
			
			$sql = "update Contacto set Nombre=\"$_POST[Nombre]\",Apellidos=\"$_POST[Apellidos]\",Redes=\"$_POST[Redes]\",Telefono=\"$_POST[Telefono]\",Direccion=\"$_POST[Direccion]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>