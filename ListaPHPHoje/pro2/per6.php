<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q5'] = $_POST['q5'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per7.php" method="post">
     <p>6. Qual é o maior oceano do planeta?</p>
    <label><input type="radio" name="q6" value="a" required> Atlântico</label><br>
    <label><input type="radio" name="q6" value="b"> Pacífico</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>