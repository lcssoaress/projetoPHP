<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q9'] = $_POST['q9'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="res.php" method="post">
     <p>10. Qual é o metal usado em fios elétricos?</p>
    <label><input type="radio" name="q10" value="a" required> Cobre</label><br>
    <label><input type="radio" name="q10" value="b"> Alumínio</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>