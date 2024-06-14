<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Buscar</title>
</head>
<body>
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $busca = $_POST['busca'];
      if (!empty($busca)) {
        $files = glob("*.txt");
        $resultados = array();
        foreach ($files as $file) {
          $conteudo = file_get_contents($file);
          if (strpos($conteudo, $busca) !== false) {
            $resultados[] = $conteudo;
          }
        }
        if (!empty($resultados)) {
          foreach ($resultados as $resultado) {
            echo "<pre>" . $resultado . "</pre>";
          }
        } else {
          echo "Nenhum resultado encontrado!";
        }
        

        }
      } else {
        echo "Por favor, preencha o campo de busca!";
      }
    
  ?>
  <form method="POST" action="">
    <h1>Buscar</h1>
    <label for="busca">Buscar por:</label><br>
    <input type="text" id="busca" name="busca"><br><br>
    <input type="submit" name="submit" value="Buscar">
    
  </form>
  <br>

  <button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>
