<?php
include_once "lib/functions.php";

if (isset($_POST["titulo"])&& isset($_POST["propuesta"])){
	    $titulo=($_POST["titulo"]);
		$propuesta=($_POST["propuesta"]);
		$sector=$_POST["sector"];
		$barrio=$_POST["barrio"];

		nueva_propuesta($titulo, $propuesta, $sector, $barrio);

}