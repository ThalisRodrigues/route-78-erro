<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Produtos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Produto</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>Codigo</th>
		<th width="10%">Nome</th>
		<th width="30%">Descrição</th>
		<th>Estoque</th>
		<th>Valor</th>
		<th>Situcação</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($produtos) : ?>
<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?php echo $produto['codigo_produto']; ?></td>
		<td><?php echo $produto['nome_produto']; ?></td>
		<td><?php echo $produto['descricao_produto']; ?></td>
		<td><?php echo $produto['estoque_produto']; ?></td>
		<td><?php echo $produto['valor_produto']; ?></td>
		<td><?php echo $produto['situacao_produto']; ?></td>

		<td class="actions text-right">
                    <!--<ORIGINAL a href="edit.php?id=php veja q tem id, vou mudar pra codigo_Produto-->
			<a href="view.php?id=<?php echo $produto['codigo_produto']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $produto['codigo_produto']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-produto="<?php echo $produto['codigo_produto']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>
<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>
<!--,nome_Produto,sexo_Produto,cpf_Produto,rg_Produto
,telefone_Produto,email_Produto,login_Produto,senha_Produto,situacao_Produto,tipo_Produto-->