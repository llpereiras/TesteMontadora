<?php
include ("mysql.php");
?>
<html>
  <head> <title>Teste Montadora</title>
	<script src="jquery-latest.js"></script>
		<script>
		function carro_novo(){

		  var carroTeste = $('#carro').val();
		  var modelo = $('#modelo').val();
		  var motor = $('#motor').val();
		  var fabricante = $('#fabricante').val();

		  if (carro == "") {
			  alert("Carro não Informado !");
			  $('#carro').focus();
			  return false;
		  }

		  if (modelo == "") {
			  alert("Modelo não Informado!");
			  $('#modelo').focus();
			  return false;
		  }


		   if (motor == "") {
			  alert("Modelo não Informado!");
			  $('#motor').focus();
			  return false;
		  }


		    if (fabricante == "") {
			  alert("Modelo não Selecionado!");
			  $('#fabricante').focus();
			  return false;
		  }

		  $.ajax({
		  type: "POST",
		  url: "carro_cadastrar.php",
		  data: {carro:carroTeste, modelo:modelo, motor:motor, fabricante:fabricante}
		  }).done(function( result ) {
		  $("#msg").html( result );
		  carro_listar();
		  });
		}

		function carro_listar(){

		  $.ajax({
		  type: "POST",
		  url: "carro_listar.php",
		  data: {q:Math.ceil(Math.random() * 100000)}
		  }).done(function( result ) {
		  $("#msg").html( result );
		  });

		}
		</script>
	</head>
	<body onload="carro_listar()" >
		<table>
			<tr>
				<td> Carro </td>
				<td> <input type="text" name="carro" id="carro" /> <td>
			</tr>
			<tr>
				<td> Modelo </td>
				<td> <input type="text" name="modelo" id="modelo" /> <td>
			</tr>
			<tr>
				<td> Motor </td>
				<td> <input type="text" name="motor" id="motor" /> <td>
			</tr>

			<tr>
				<td> Fabricante </td>
				<td>

				<select name="fabricante" id="fabricante">
					<option value = ""></option>
					<?php

						$con = new database();
						$con -> conecta();

						$sql = "select id, nome from fabricantes order by nome";
							$resultado = mysql_query($sql,$con->conexao) or die (mysql_error());
							$qnt = mysql_num_rows($resultado);
							if ($qnt <= 0){
							echo "Nenhum Fabricante";
							mysql_close($con);
							exit();
							}else{
							while ($linha = mysql_fetch_array($resultado)){
							?>

							<option value = "<?php echo $linha["id"]; ?>"><?php echo $linha["nome"]; ?></option>

							<?php
							}
						}

					?>
				</select>

				<td>
			</tr>


			<tr>
				<td> </td>
				<td> <input type="button" name="cadastrar" id="cadastrar" value="Cadastrar" onclick = "carro_novo()" />	</td>
			</tr>

		</table>

		<div id="msg"> </div>


	</body>
</html>
