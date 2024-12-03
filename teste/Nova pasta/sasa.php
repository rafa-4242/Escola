<?php
session_start();
include("Mysql.php");
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$SQL=Mysql::conectar()->prepare("SELECT *from usuario where
emailusuario = ? and senhausuario = ?")
$resultado=$SQL->execute(array($nome,$senha));

if($resultado->rowCount()== 1){
    $_SESSION['logado']="logado";
    header("location:pagina2.php");
}else{
    header("location:index.php");
}