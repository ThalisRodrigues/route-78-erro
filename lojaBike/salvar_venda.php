<br>
<?php
	$horadata  = @$_REQUEST["horaedata_venda"];
	$quantprod = @$_REQUEST["quant_prod_venda"];
	$valreceb  = @$_REQUEST["valorrecebido_venda"];
	$valtotal  = @$_REQUEST["valortotal_venda"];
	$fun       = @$_REQUEST["funcionario_cod_fun"];
	$cli       = @$_REQUEST["cliente_cod_cli"];
	$bike      = @$_REQUEST["bikes_cod_bike"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO vendas (horaedata_venda, quant_prod_venda, valorrecebido_venda, valortotal_venda, funcionario_cod_fun, cliente_cod_cli, bikes_cod_bike) VALUES ({$horadata},'{$quantprod}', '{$valreceb}', '{$valtotal}', '{$fun}', '{$cli}', '{$bike}')";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE vendas SET
						horaedata_venda = '{$horadata}' ,
						quant_prod_venda = '{$quantprod}',
						valorrecebido_venda = '{valreceb}$',
						valortotal_venda = '{$valtotal}',
						funcionario_cod_fun = '{$fun}',
						cliente_cod_cli = '{$cli}', 
						bikes_cod_bike = '{$bike}'
					WHERE
						cod_venda=".$_REQUEST["cod_venda"];
						
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM produto WHERE id_produto=".$_REQUEST["id_produto"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
		break;
	}
?>






