<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q7'] = $_POST['q7'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per9.php" method="post">
    <p>8. Quantos segundos há em um minuto?</p>
    <label><input type="radio" name="q8" value="a" required> 60</label><br>
    <label><input type="radio" name="q8" value="b"> 100</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>