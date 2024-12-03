<?php
session_start();
$nomeusuario=$_POST['usuario'];
$senhausuario=$_POST['senha'];
if($senhausuario == "1234"){
    $_SESSION['usuariologado']="logado";
    header("location:index.php");
}else{
    echo("SENHA OU USUARIO INCORRETO");
    header("location:index:php");
}