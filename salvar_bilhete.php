<?php
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtém os valores dos campos
  $de = $_POST['de'] ?? '';
  $para = $_POST['para'] ?? '';
  $data = $_POST['data'] ?? '';
  $recado = $_POST['recado'] ?? '';

  // Salva os dados em um arquivo de texto
  $filename = $de . "_" . $para . ".txt";
  $file = fopen($filename, "a") or die("Não foi possível abrir o arquivo " . $filename . " para escrita! Verifique as permissões do diretório.");
  $txt = "De: " . $de . "\n";
  $txt .= "Para: " . $para . "\n";
  $txt .= "Data: " . $data . "\n";
  $txt .= "Recado: " . $recado . "\n\n";
  $success = fwrite($file, $txt);
  fclose($file);

  if ($success) {
    echo "Bilhete salvo com sucesso!";
  } else {
    echo "Ocorreu um erro ao salvar o bilhete!";
  }
}
?>
