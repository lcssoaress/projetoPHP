<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q6'] = $_POST['q6'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per8.php" method="post">
    <p>7. Qual é o idioma mais falado no mundo?</p>
    <label><input type="radio" name="q7" value="a" required> Inglês</label><br>
    <label><input type="radio" name="q7" value="b"> Mandarim</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>