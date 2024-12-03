<?php
  session_start();
  include("MySql.php");
  $logado=$_SESSION['conectado'];
  if($logado=="logado"){
    //coteúdo da página
    echo("ACESSO AO PAINEL PERMITIDO");
}else{
    echo("VOCÊ PRECISA ESTAR LOGADO");
    //header("location:index.php");
}