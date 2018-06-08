<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Funcionarios</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Funcionario</a>
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
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>Telefone</th>
		<th>CPF</th>
		<th>Tipo</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($funcionarios) : ?>
<?php foreach ($funcionarios as $funcionario) : ?>
	<tr>
		<td><?php echo $funcionario['codigo_funcionario']; ?></td>
		<td><?php echo $funcionario['nome_funcionario']; ?></td>
		<td><?php echo $funcionario['telefone_funcionario']; ?></td>
		<td>00 0000-0000</td>
                <td><?php echo $funcionario['tipo_funcionario']; ?></td>

		<td class="actions text-right">
                    <!--<ORIGINAL a href="edit.php?id=php veja q tem id, vou mudar pra codigo_funcionario-->
			<a href="view.php?id=<?php echo $funcionario['codigo_funcionario']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $funcionario['codigo_funcionario']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-funcionario="<?php echo $funcionario['codigo_funcionario']; ?>">
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
<!--,nome_funcionario,sexo_funcionario,cpf_funcionario,rg_funcionario
,telefone_funcionario,email_funcionario,login_funcionario,senha_funcionario,situacao_funcionario,tipo_funcionario-->