<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Documentos</title>
  </head>
  <body>
    <h1>Cadastro de Documentos</h1>
    <form method="post" action="salvar.php">
      <label>Livro:</label><br>
      <input type="text" name="livro"><br>
      <label>Folha:</label><br>
      <input type="text" name="folha"><br>
      <label>Data de Início:</label><br>
      <input type="date" name="data_inicio"><br>
      <label>Responsável:</label><br>
      <input type="text" name="responsavel"><br>
      <label>Natureza:</label><br>
      <input type="text" name="natureza"><br>
      <label>Outorgantes*:</label><br>
      <textarea name="outorgantes"></textarea><br>
      <label>Outorgados*:</label><br>
      <textarea name="outorgados"></textarea><br>
      <label for="docs_ok">Documentos OK*:</label><br>
<input type="radio" id="sim" name="docs_ok" value="sim">
<label for="sim">Sim</label><br>
<input type="radio" id="nao" name="docs_ok" value="nao">
<label for="nao">Não</label><br><br>

      <label>Documentos Faltando:</label><br>
      <textarea name="documentos_faltando"></textarea><br>
      <label>Observações:</label><br>
      <textarea name="observacoes"></textarea><br>
      <button type="submit" name="btn_salvar" value="salvar">Salvar</button>

    </form>
<br>
    <button onclick="window.location.href='index.php'">Voltar</button>

  </body>
</html>
