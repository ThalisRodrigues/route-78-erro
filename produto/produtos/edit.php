<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar produto</h2>

<form action="edit.php?id=<?php echo $produto['codigo_produto']; ?>" method="post">
  
   <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome produto</label>
      <input type="text" class="form-control" name="produto['nome_produto']" value="<?php echo $produto['nome_produto']; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">Estoque</label>
      <input type="text" class="form-control" name="produto['estoque_produto']"value="<?php echo $produto['estoque_produto']; ?>">
    </div>
  </div>
  <!-- ESPACO-->
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="produto['descricao_produto']"value="<?php echo $produto['descricao_produto']; ?>">
    </div>
	<div class="form-group col-md-5">
      <label for="name">Valor</label>
      <input type="text" class="form-control" name="produto['valor_produto']"value="<?php echo $produto['valor_produto']; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">Situação do Produto</label>
      <select type="text" class="form-control" name="produto['situacao_produto']"value="<?php echo $produto['situacao_produto']; ?>">
          <option>Ativo</option>
          <option>Inativo</option>
      </select>
    </div>
    
  </div>
  <!--ES`PA CO -->
   

  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>