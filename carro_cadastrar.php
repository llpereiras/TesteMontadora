<?php 

  include ("mysql.php");
	
	$con = new database();
	
	$con -> conecta();
	  
	$carro = $_POST['carro']; 
	$modelo = $_POST['modelo']; 
	$motor = $_POST['motor']; 
	$fabricante = $_POST['fabricante']; 

	$sql = "INSERT INTO carro (carro, modelo, motor,fabricante_id) values ("; 
	$sql .= "'" . $carro . "',";
	$sql .= "'" . $modelo . "',";
	$sql .= "'" . $motor . "',";
	$sql .= "'" . $fabricante . "')";
	
	$resultado = $con -> inserir($sql, $con->conexao);
	
	if ($resultado > 0 ) {
	echo "Registro Inserido!";
	}else{
	echo "erro";
	}
	 
	
	
?> 
