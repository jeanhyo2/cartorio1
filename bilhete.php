<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Bilhetes</title>
  </head>
  <body>
    <h1>Cadastro de Bilhetes</h1>
    <form method="post" action="salvar_bilhete.php">
      <label>De:</label><br>
      <input type="text" name="de"><br>
      <label>Para:</label><br>
      <input type="text" name="para"><br>
      <label>Data:</label><br>
      <input type="date" name="data"><br>
      <label>Recado:</label><br>
      <textarea name="recado"></textarea><br>
      <button type="submit" name="btn_salvar" value="salvar">Salvar</button>
    </form>
    <br>
    <button onclick="window.location.href='index.php'">Voltar</button>
  </body>
</html>
