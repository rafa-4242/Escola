<?php
    $nome=$_['nome'];
    $senha=$_POST['senha'];
    echo($nome);
    echo($senha);
    if(($senha=='5678')){
        include("painel.php");
    }else{
        echo("senha  incorreta")
    }
?>