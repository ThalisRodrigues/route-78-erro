<?php #Pagina de VIEW
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $cliente['codigo_cliente']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome / Razão Social:</dt>
	<dd><?php echo $cliente['nome_cliente']; ?></dd>

	<dt>CPF / CNPJ:</dt>
	<dd><?php echo $cliente['cpf_cliente']; ?></dd>

	<dt>Tipo:</dt>
	<dd><?php echo $cliente['tipo_cliente']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $cliente['endereco_cliente']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $cliente['telefone_cliente']; ?></dd>

	<dt>Email:</dt>
	<dd><?php echo $cliente['email_cliente']; ?></dd>

	
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $cliente['codigo_cliente']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>