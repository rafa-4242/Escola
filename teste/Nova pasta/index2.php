<?php
include("class.php");
$rafael = new Pessoa;
$gustavo = new Pessoa;
$rafael ->nome="Rafael Augusto de Moraes";
$rafael ->idade="17";
$rafael ->altura="1.92";
$rafael ->acessardados();
echo("<HR>");
$gustavo ->nome="GUSTAVO HENRIQUE LIMA";
$gustavo ->idade="17";
$gustavo ->altura="1,78";
$gustavo ->acessardados();