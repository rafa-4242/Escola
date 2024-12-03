<?php
    session_start();
    if($_SESSION['usuariologado']=="logado"){
        echo("PAGINA DE CADASTRO");
    }else{
      echo("PAGINA RESTRITA");
    }