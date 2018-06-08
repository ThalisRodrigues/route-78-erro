<?php #Pagina de VIEW
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Funcionario <?php echo $funcionario['codigo_funcionario']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>


<!--,nome_funcionario,sexo_funcionario,cpf_funcionario,rg_funcionario
,telefone_funcionario,email_funcionario,login_funcionario,senha_funcionario,situacao_funcionario,tipo_funcionario-->        
        
<dl class="dl-horizontal">
	<dt>Nome: </dt>
	<dd><?php echo $funcionario['nome_funcionario']; ?></dd>

	<dt>CPF :</dt>
	<dd><?php echo $funcionario['cpf_funcionario']; ?></dd>

	<dt>Tipo:</dt>
	<dd><?php echo $funcionario['tipo_funcionario']; ?></dd>
        
	<dt>Sexo:</dt>
	<dd><?php echo $funcionario['sexo_funcionario']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>RG:</dt>
	<dd><?php echo $funcionario['rg_funcionario']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $funcionario['telefone_funcionario']; ?></dd>

	<dt>Email:</dt>
	<dd><?php echo $funcionario['email_funcionario']; ?></dd>

	
</dl>
<dl class="dl-horizontal">
	<dt>Login:</dt>
	<dd><?php echo $funcionario['login_funcionario']; ?></dd>

	<dt>Senha:</dt>
	<dd><?php echo $funcionario['senha_funcionario']; ?></dd>

	<dt>Situação do Funcionario:</dt>
	<dd><?php echo $funcionario['situacao_funcionario']; ?></dd>

	
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $funcionario['codigo_funcionario']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>