<h1>Cadastrar Bike</h1>
<form action="index.php?page=salvar_bike&acao=cadastrar" method="POST">
	<!-- <div class="form-group">
		<label>Marca</label>
		< ?php
			$sql = "SELECT * FROM produto";
	
			$result = $conn->query($sql);
			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo Marca</th>";
				print "<th>Nome da Marca</th>";
				print "</tr>";
				while( $row = $result->fetch_assoc() ){
					print "<tr>";
					print "<td>".$row["id_marca"]."</td>";
					print "<td>".$row["nome_marca"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>-->
		
		<!-- `codigo_produto` INT NOT NULL AUTO_INCREMENT,
  `nome_produto` VARCHAR(45) NOT NULL,
  `descricao_produto` TEXT(500) NOT NULL,
  `estoque_produto` VARCHAR(45) NOT NULL,
  `valor_produto` DOUBLE NOT NULL,
  `situacao_produto` VARCHAR(45) NOT NULL,-->
	</div>

	<div class="form-group">
		<label>Nome Produto</label>
		<input type="text" name="nome_produto" class="form-control">
		<br/>
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<input type="text" name="descricao_produto" class="form-control">
		<br/>
	</div>
	<div class="form-group">
		<label>Estoque</label>
		<input type="text" name="estoque_produto" class="form-control">
		<br/>
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input type="number" name="valor_produto" class="form-control">
		<br/>
	</div>
	<div class="form-group">
		<label>Situação Produto</label>
		<input type="text" name="situacao_produto" class="form-control">
		<br/>
	</div>
	
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>