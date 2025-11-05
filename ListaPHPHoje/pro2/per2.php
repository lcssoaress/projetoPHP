<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q1'] = $_POST['q1'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per3.php" method="post">
    <p>2. O Sol é uma...</p>
    <label><input type="radio" name="q2" value="a" required> Estrela</label><br>
    <label><input type="radio" name="q2" value="b"> Planeta</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>