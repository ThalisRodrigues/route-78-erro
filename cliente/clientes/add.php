<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="cliente['nome_cliente']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Tipo</label>
      <select type="text" class="form-control" name="cliente['tipo_cliente']" value="<?php echo $cliente['tipo_cliente']; ?>">
          <option>Pessoa Física</option>
          <option>Pessoa Juridica</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">CNPJ / CPF</label>
      <input type="text" class="form-control" name="cliente['cpf_cliente']">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Telefone</label>
      <input type="text" class="form-control" name="cliente['telefone_cliente']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Email</label>
      <input type="text" class="form-control" name="cliente['email_cliente']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Endereco</label>
      <input type="text" class="form-control" name="cliente['endereco_cliente']">
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