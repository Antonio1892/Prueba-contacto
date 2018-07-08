<?php

if(!empty($_POST)){
	if(isset($_POST["user"]) &&isset($_POST["pass"]) &&isset($_POST["email"])){
		if($_POST["user"]!=""&& $_POST["pass"]!=""&&$_POST["email"]!=""){
			include "../php/conexion.php";
			
			$sql = "INSERT INTO usuario (user, pass, email) value (\"$_POST[user]\",\"$_POST[pass]\",\"$_POST[email]\")";
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