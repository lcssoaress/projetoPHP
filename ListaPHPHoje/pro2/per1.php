

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['nome'] = $_POST['nome'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per2.php" method="post">
    <p>1. Qual é a capital do Brasil?</p>
    <label><input type="radio" name="q1" value="a" required> Brasília</label><br>
    <label><input type="radio" name="q1" value="b"> Rio de Janeiro</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>
