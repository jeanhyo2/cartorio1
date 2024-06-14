<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtém os valores dos campos
  $livro = $_POST['livro'] ?? '';
  $folha = $_POST['folha'] ?? '';
  $data_inicio = $_POST['data_inicio'] ?? '';
  $responsavel = $_POST['responsavel'] ?? '';
  $natureza = $_POST['natureza'] ?? '';
  $outorgantes = $_POST['outorgantes'] ?? '';
  $outorgados = $_POST['outorgados'] ?? '';
  $documentos_ok = $_POST['documentos_ok'] ?? '';
  $documentos_faltando = $_POST['documentos_faltando'] ?? '';
  $observacoes = $_POST['observacoes'] ?? '';

  // Salva os dados em um arquivo de texto
  $filename = $outorgantes . "_" . $outorgados . ".txt";
  $file = fopen($filename, "a") or die("Não foi possível abrir o arquivo!");
  $txt = "Responsável: " . $responsavel . "\n";
  $txt .= "Data de Início: " . $data_inicio . "\n";
  $txt .= "Natureza: " . $natureza . "\n";
  $txt .= "Outorgantes: " . $outorgantes . "\n";
  $txt .= "Outorgados: " . $outorgados . "\n";
  $txt .= "Documentos OK: ".$_POST['docs_ok']."\n";

  $txt .= "Documentos Faltando: " . $documentos_faltando . "\n";
  $txt .= "Observações: " . $observacoes . "\n\n";
  fwrite($file, $txt);
  fclose($file);

  echo "Dados salvos com sucesso!";
}
?>
