<?php

  include ("mysql.php");

	$con = new database();

	$con -> conecta();

  $dados["carro"] = $_POST['carro'];
  $dados["modelo"] = $_POST['modelo'];
  $dados["motor"] = $_POST['motor'];
  $dados["fabricante_id"] = $_POST['fabricante'];

	$resultado = $con -> inserir("carro", $dados, $con->conexao);

	if ($resultado > 0 ) {
	echo "Registro Inserido!";
	}else{
	echo "erro";
	}



?>
