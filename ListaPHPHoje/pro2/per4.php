<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q3'] = $_POST['q3'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per5.php" method="post">
     <p>4. Quantos continentes existem?</p>
    <label><input type="radio" name="q4" value="a" required> 5</label><br>
    <label><input type="radio" name="q4" value="b"> 6</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>