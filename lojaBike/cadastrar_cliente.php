<h1>Cadastrar Cliente</h1>
<form action="index.php?page=salvar_cliente&acao=cadastrar" method="POST">
	
	<div class="form-group">
			<label>Nome Cliente</label>
			<input type="text" name="nome_cliente" class="form-control" >
		</div>
		<div class="form-group">
			<label>Tipo</label>
			<input type="text" name ="tipo_cliente" class="form-control" >
		</div>
		<div class="form-group">
			<label>CPF</label>
			<input type="text" name="cpf_cliente" class="form-control" >
		</div>
		<div class="form-group">
			<label>Telefone</label>
			<input type="text" name="telefone_cliente" class="form-control" >
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email_cliente" class="form-control" >
		</div>
		<div class="form-group">
			<label>Endereço</label>
			<input type="text" name="endereco_cliente" class="form-control" >
		</div>	
	
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>
