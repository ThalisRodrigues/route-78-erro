<h1>Cadastrar Pedido</h1>
  

<form action="index.php?page=salvar_venda&acao=cadastrar" method="POST">
	<div class="form-group">
		<label>Data </label>
		<input type="date" name="data_pedido" class="form-control">
	</div>
	<div class="form-group">
		<label>Hora </label>
		<input type="time" name="hora_pedido" class="form-control">
	</div>
	
	<div class="form-group">
		<label>Subtotal</label>
		<input type="number" name="subtotal_pedido" class="form-control" >
	</div>	
	<div class="form-group">
		<label>Total Pedido</label>
		<input type="number" name="total_pedido" class="form-control" >
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
					print "<td>".$row["codigo_funcionario"]."</td>";
					print "<td>".$row["nome_funcionario"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="funcionario_codigo_funcionario" class="form-control" >
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
					print "<td>".$row["codigo_cliente"]."</td>";
					print "<td>".$row["nome_cliente"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="cliente_codigo_cliente" class="form-control" >
	</div>
	<div class="form-group">
		<label>Produtos</label>
		<?php
			$sql = "SELECT * FROM produto";
	
			$result = $conn->query($sql);
			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo</th>";
				print "<th>Nome</th>";
				print "<th>Modelo Produto</th>";
				print "</tr>";
				while( $row = $result->fetch_assoc() ){
					print "<tr>";
					print "<td>".$row["codigo_produto"]."</td>";
					print "<td>".$row["nome_produto"]."</td>";
					print "<td>".$row["descricao_produto"]."</td>";
					print "</tr>";
				}
				print "</table>";
			}else{
				print "Não encontrou resultados";
			}
		?>
		<input type="number" name="produto_codigo_produto" class="form-control" >
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>