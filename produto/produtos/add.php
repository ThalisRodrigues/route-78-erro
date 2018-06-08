<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo produto</h2>

<form action="add.php" method="post">
  <!-- area de campos do form
  <!--,nome_produto,sexo_produto,cpf_produto,rg_produto
,telefone_produto,email_produto,login_produto,senha_produto,situacao_produto,tipo_produto-->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome produto</label>
      <input type="text" class="form-control" name="produto['nome_produto']">
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">sexo</label>
      <select type="text" class="form-control" name="produto['sexo_produto']">
          <option>Masculino</option>
          <option>Feminino</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">CPF</label>
      <input type="text" class="form-control" name="produto['cpf_produto']">
    </div>
  </div>
  <!-- ESPACO-->
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Registro Geral</label>
      <input type="text" class="form-control" name="produto['rg_produto']">
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">Tipo</label>
      <select type="text" class="form-control" name="produto['tipo_produto']">
          <option>Gerente</option>
          <option>Atendente</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="campo3">Situação do produto</label>
      <input type="text" class="form-control" name="produto['situacao_produto']">
    </div>
  </div>
  <!--ES`PA CO -->
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Telefone</label>
      <input type="text" class="form-control" name="produto['telefone_produto']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Email</label>
      <input type="text" class="form-control" name="produto['email_produto']">
    </div>

    
  </div>
  <div class="row">
    <div class="form-group col-md-7">
      <label for="campo2">Login</label>
      <input type="text"  class="form-control" name="produto['login_produto']">
    </div>  
    <div class="form-group col-md-3">
      <label for="name">Senha</label>
      <input type="password"  class="form-control" name="produto['senha_produto']">
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