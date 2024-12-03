<?php
  section_satart();
?>  
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>
<style>
/* Estilos básicos para o menu */
body {
font-family: Arial, sans-serif;
}
nav ul {
list-style-type: none;
margin: 0;
padding: 0;
background-color: #f1f1f1;
overflow: hidden;
}
nav li {
float: left;
}
nav li a {
display: block;
padding: 20px 20px;
text-decoration: none;
color: #333;
}
nav li a:hover {
background-color: #ddd;
}
</style>
</head> 
<body>

<nav> 
  <ul> 
  <li><a href="index.php">Pagina Inicial</a>
</li> 
  <li><a href="#">Opção 2</a></li>
<li><a href="pessoas.php">clientes</a>
</li> 
  <li><a href="produto.php">Produto</a>
</li> 
  </ul> 
</nav> 
<form action="tratar.php" method="POST">
   <input type="text" name="usuario">
   <input type="password" name="senha">
   <input type="submit">
</form>   
</body> 
</html>