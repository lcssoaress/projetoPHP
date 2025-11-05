<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q8'] = $_POST['q8'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per10.php" method="post">
     <p>9. A Terra gira em torno de qual astro?</p>
    <label><input type="radio" name="q9" value="a" required> Lua</label><br>
    <label><input type="radio" name="q9" value="b"> Sol</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>