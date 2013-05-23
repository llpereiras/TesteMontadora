<?php 

  include ("mysql.php");
	
	$con = new database();
	
	$con -> conecta();
	  
	$sql = "select carro.id, carro.carro, carro.modelo, carro.motor, carro.fabricante_id, fabricantes.nome
			from carro, fabricantes 
			where carro.fabricante_id = fabricantes.id
			order by carro.carro";
	
	$resultado = $con -> consulta($sql, $con->conexao);
	$qnt = mysql_num_rows($resultado);
	if ($qnt < 1) {
		echo "Nenhum registro encontrado!";
		exit();
	}else{
	
	?>
	
	<table>
		<tr>
		<td> Carro	</td>
		<td> Modelo	</td>
		<td> Motor	</td>
		<td> Fabricante	</td>
		</tr>
		
		<?php while ($linha  = mysql_fetch_array($resultado)) { ?>
		<tr>
		<td> <?php echo $linha["carro"]; ?> </td>
		<td> <?php echo $linha["modelo"]; ?>	</td>
		<td> <?php echo $linha["motor"]; ?>	</td>
		<td> <?php echo $linha["nome"]; ?>	</td>
		</tr>
		
		<?php } ?>
		
	</table>
	
	
	<?php } ?>
	 
