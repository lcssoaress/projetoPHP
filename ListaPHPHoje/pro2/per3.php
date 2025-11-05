<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q2'] = $_POST['q2'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per4.php" method="post">
     <p>3. Qual é o maior mamífero do mundo?</p>
    <label><input type="radio" name="q3" value="a" required> Elefante</label><br>
    <label><input type="radio" name="q3" value="b"> Baleia-azul</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>