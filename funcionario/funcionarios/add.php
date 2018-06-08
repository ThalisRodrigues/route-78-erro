<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Funcionario</h2>

<form action="add.php" method="post">
  <!-- area de campos do form
  <!--,nome_funcionario,sexo_funcionario,cpf_funcionario,rg_funcionario
,telefone_funcionario,email_funcionario,login_funcionario,senha_funcionario,situacao_funcionario,tipo_funcionario-->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome Funcionario</label>
      <input type="text" class="form-control" name="funcionario['nome_funcionario']">
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">sexo</label>
      <select type="text" class="form-control" name="funcionario['sexo_funcionario']">
          <option>Masculino</option>
          <option>Feminino</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">CPF</label>
      <input type="text" class="form-control" name="funcionario['cpf_funcionario']">
    </div>
  </div>
  <!-- ESPACO-->
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Registro Geral</label>
      <input type="text" class="form-control" name="funcionario['rg_funcionario']">
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">Tipo</label>
      <select type="text" class="form-control" name="funcionario['tipo_funcionario']">
          <option>Gerente</option>
          <option>Atendente</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="campo3">Situação do Funcionario</label>
      <input type="text" class="form-control" name="funcionario['situacao_funcionario']">
    </div>
  </div>
  <!--ES`PA CO -->
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Telefone</label>
      <input type="text" class="form-control" name="funcionario['telefone_funcionario']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Email</label>
      <input type="text" class="form-control" name="funcionario['email_funcionario']">
    </div>

    
  </div>
  <div class="row">
    <div class="form-group col-md-7">
      <label for="campo2">Login</label>
      <input type="text"  class="form-control" name="funcionario['login_funcionario']">
    </div>  
    <div class="form-group col-md-3">
      <label for="name">Senha</label>
      <input type="password"  class="form-control" name="funcionario['senha_funcionario']">
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