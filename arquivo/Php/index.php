<?php
  session_start();
  include("MySql.php");
  $usuario=$_POST['nome'];
  $senha=$_POST['senha'];
  $consulta=Mysql::conectar()->prepare("SELECT * FROM NOME = ? AND SENHA = ?");
  $consulta->execute(array($usuario,$senha));
  if($consulta->rowcout()==1){
    $_SESSION['conectado']="logado";
    header("location:painel.php");
    //echo("CONECTADO E VALOR ENCONTRADO");
  }else {
    //echo("ACESSO NEGADO");
    header("location:index.php");
  }
?>