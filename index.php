	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulário de cadastro.</title>
		<link rel="stylesheet" type="text/css" href="css/Style.css">
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	</head>
	<body>
		<?php
		session_start()
		  ?>

		  <h3>Sessão de Usuário</h3>

		  SID desta sessão é: <?php echo session_id();  ?>
	</body>
	</html>