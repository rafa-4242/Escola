<?php
$url = 'https://brasilapi.com.br/api/feriados/v1/2024';
$response = file_get_contents($url);
if ($response === FALSE) {
    die('Erro ao acessar a API');
}
$data = json_decode($response, true);
if ($data === NULL) {
    die('Erro ao decodificar JSON');
}
foreach ($data as $feriado) {
    $date = $feriado['date'];
    $nome = $feriado['name'];
    $tipo = $feriado['type'];
    echo "Data: $date - Nome: $nome - Tipo: $tipo\n";
}
?>