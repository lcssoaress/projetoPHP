<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <?php
session_start();
$_SESSION['q4'] = $_POST['q4'];
?>
</head>
<body>
  <h1>Quiz de Conhecimentos Gerais</h1>
  <form action="per6.php" method="post">
     <p>5. Quem pintou a Mona Lisa?</p>
    <label><input type="radio" name="q5" value="a" required> Leonardo da Vinci</label><br>
    <label><input type="radio" name="q5" value="b"> Pablo Picasso</label><br><br>

    <button type="submit">Próxima Pergunta</button>
  </form>
</body>
</html>