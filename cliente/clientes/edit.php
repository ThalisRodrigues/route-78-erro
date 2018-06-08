<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $cliente['codigo_cliente']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="cliente['nome_cliente']" value="<?php echo $cliente['nome_cliente']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="cliente['cpf_cliente']" value="<?php echo $cliente['cpf_cliente']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Tipo</label>
      <select type="text" class="form-control" name="cliente['tipo_cliente']" value="<?php echo $cliente['tipo_cliente']; ?>">
          <option>Pessoa Física</option>
          <option>Pessoa Juridica</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="cliente['endereco_cliente']" value="<?php echo $cliente['endereco_cliente']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="cliente['telefone_cliente']" value="<?php echo $cliente['telefone_cliente']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Email</label>
      <input type="text" class="form-control" name="cliente['email_cliente']" value="<?php echo $cliente['email_cliente']; ?>">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>