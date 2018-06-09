<h1>Cadastrar Funcionario</h1>
<form action="index.php?page=salvar_venda&acao=cadastrar" method="POST">
	<div class="form-group">
		<label>Hora e Data</label>
		<input type="date_time_set" name="horaedata_venda" class="form-control">
	</div>
	<div class="form-group">
		<label>Quantidade de Produtos</label>
		<input type="number" name="quant_prod_venda" class="form-control" >
	</div>	
	<div class="form-group">
		<label>Valor Recebido</label>
		<input type="number" name="valorrecebido_venda" class="form-control" >
	</div>	
	<div class="form-group">
		<label>Valor Total</label>
		<input type="number" name="valortotal_venda" class="form-control" >
	</div>
	<div class="form-group">
		<label>Funcionario</label>
		<?php
			$sql = "SELECT * FROM funcionario";
	
			$result = $conn->query($sql);
			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo</th>";
				print "<th>Nome do Funcionario</th>";
				print "</tr>";
				while( $row = $result->fetch_assoc() ){
					print "<tr>";
					print "<td>".$row["cod_fun"]."</td>";
					print "<td>".$row["nome_fun"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="funcionario_cod_fun" class="form-control" >
	</div>
	
	
	
	<div class="form-group">
		<label>Cliente</label>
		<?php
			$sql = "SELECT * FROM cliente";
	
			$result = $conn->query($sql);
			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo</th>";
				print "<th>Nome Cliente</th>";
				print "</tr>";
				while( $row = $result->fetch_assoc() ){
					print "<tr>";
					print "<td>".$row["cod_cli"]."</td>";
					print "<td>".$row["nome_cli"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="cliente_cod_cli" class="form-control" >
	</div>
	<div class="form-group">
		<label>Blikes</label>
		<?php
			$sql = "SELECT * FROM bikes";
	
			$result = $conn->query($sql);
			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo</th>";
				print "<th>Modelo Bike</th>";
				print "</tr>";
				while( $row = $result->fetch_assoc() ){
					print "<tr>";
					print "<td>".$row["cod_bike"]."</td>";
					print "<td>".$row["modelo_bike"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="bikes_cod_bike" class="form-control" >
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>