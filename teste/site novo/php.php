<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Diretório para salvar os arquivos
    $diretorio = "uploads/";

    // Verifica se o diretório existe, caso contrário, cria
    if (!is_dir($diretorio)) {
        mkdir($diretorio, 0755, true);
    }

    // Dados do arquivo
    $arquivoNome = basename($_FILES['arquivo']['name']);
    $arquivoCaminho = $diretorio . $arquivoNome;
    $arquivoTipo = strtolower(pathinfo($arquivoCaminho, PATHINFO_EXTENSION));

    // Verifica o tipo do arquivo (opcional)
    $tiposPermitidos = array("pdf", "doc", "docx", "jpg", "png");
    if (in_array($arquivoTipo, $tiposPermitidos)) {
        // Tenta mover o arquivo para o diretório
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivoCaminho)) {
            echo "Arquivo enviado com sucesso!<br>";
            echo "Nome: $nome<br>Email: $email<br>";
            echo "Arquivo: <a href='$arquivoCaminho'>$arquivoNome</a>";
        } else {
            echo "Erro ao enviar o arquivo.";
        }
    } else {
        echo "Tipo de arquivo não permitido.";
    }
} else {
    echo "Método de envio inválido.";
}

?>