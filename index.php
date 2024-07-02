<?php
	if($_GET)
	{
		//todas as outras rotas exemplo: http://localhost/cursoMVC/index.php?controle=cursoController&metodo=listar
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		require_once "Controllers/" . $controle .".class.php";
		$obj = new $controle();
		$obj->$metodo();
		
	}
	else
	{
		//rota inicial http://localhost/cursoMVC/index.php
		require_once "Controllers/inicioController.class.php";
		$obj = new inicioController();
		$obj->inicio();
	}
?>