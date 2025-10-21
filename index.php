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
	<h1>Cadastro de usuário</h1>
	<main class="container">
	<form action="#" method="post">
		<div class="md-3">
			<label for="primeiroNome">Primeiro nome</label>
	<input type="text" name="primeiroNome" id="primeiroNome" placeholder="Primeiro Nome ... " maxlength="50" required autofocus>

		</div>
	<div class="md-3">
		<label for="primeiroNome">Sobrenome</label>
	<input type="text" name="sobreNome" id="sobreNome" placeholder="Sobrenome ... " maxlength="50" required>

	</div>
	<div class="md-3">
		<label for="escolhaPets">Escolha seu Pet</label>
	<select id="escolhaPets" name="escolhaPets">
		<option value="nenhum">Nenhum</option>
		<option value="cachorro">Cachorro</option>
		<option value="gato">Gato</option>
		<option value="passarinho">Passarinho</option>
		<option value="peixe">Peixe</option>
	</select>
	</div>
	<button class="btn btn-primary" type="submit">Enviar</button>
	<button class="btn btn-warning" type="reset">Limpar</button>


	</form>
	</main>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
	</body>
	</html>