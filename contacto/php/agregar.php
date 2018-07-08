<?php

if(!empty($_POST)){
	if(isset($_POST["Nombre"]) &&isset($_POST["Apellidos"]) &&isset($_POST["Redes"]) &&isset($_POST["Telefono"]) &&isset($_POST["Direccion"])){
		if($_POST["Nombre"]!=""&& $_POST["Apellidos"]!=""&&$_POST["Telefono"]!=""){
			include "conexion.php";
			
			$sql = "INSERT INTO Contacto (Nombre, Apellidos, Redes, Telefono, Direccion) value (\"$_POST[Nombre]\",\"$_POST[Apellidos]\",\"$_POST[Redes]\",\"$_POST[Telefono]\",\"$_POST[Direccion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>