<?php

require_once('../config.php');
require_once(DBAPI);

$funcionarios = null;
$funcionario = null;

/**
 *  Listagem de funcionarios
 */
function index() {
	global $funcionarios;
	$funcionarios = find_all('funcionario');
}
/**
 *  Cadastro de funcionarios
 */
function add() {

  if (!empty($_POST['funcionario'])) {
    


    $funcionario = $_POST['funcionario'];
    
    save('funcionario', $funcionario);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de funcionario
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['funcionario'])) {

      $funcionario = $_POST['funcionario'];

      update('funcionario', $id, $funcionario);
      header('location: index.php');
    } else {

      global $funcionario;
      $funcionario = find('funcionario', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um funcionario
VIEW ESTÁ FUNCIONANDO, ADD ESTÁ FUNCIONANDO,!!! DANGER!!! DELETE E EDIT NAO FUNCIONAM
 *  */
function view($id = null) {
  global $funcionario;
  $funcionario = find('funcionario', $id);
}
/**
 *  Exclusão de um funcionario
 */
function delete($id = null) {

  global $funcionario;
  $funcionario = remove('funcionario', $id);

  header('location: index.php');
}