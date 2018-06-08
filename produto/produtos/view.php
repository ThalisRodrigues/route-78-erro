<?php #Pagina de VIEW
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>produto <?php echo $produto['codigo_produto']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>


<!--,nome_produto,sexo_produto,cpf_produto,rg_produto
,telefone_produto,email_produto,login_produto,senha_produto,situacao_produto,tipo_produto-->        
        
<dl class="dl-horizontal">
	<dt>Nome: </dt>
	<dd><?php echo $produto['nome_produto']; ?></dd>

	<dt>Estoque :</dt>
	<dd><?php echo $produto['estoque_produto']; ?></dd>

	<dt>Descrição:</dt>
	<dd><?php echo $produto['descricao_produto']; ?></dd>
        
	<dt>Valor:</dt>
	<dd><?php echo $produto['valor_produto']; ?></dd>
	
	<dt>Situação:</dt>
	<dd><?php echo $produto['situacao_produto']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $produto['codigo_produto']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>