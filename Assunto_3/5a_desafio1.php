<?php
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nome = trim($_POST['nome'] ?? '');
	$anoNascimento = (int) ($_POST['ano_nascimento'] ?? 0);
	$anoAtual = (int) date('Y');

	if ($nome === '' || $anoNascimento < 1900 || $anoNascimento > $anoAtual) {
		$mensagem = 'Preencha os campos corretamente.';
	} else {
		$idade = $anoAtual - $anoNascimento;

		if ($idade >= 18) {
			$mensagem = "Acesso permitido, $nome!";
			file_put_contents(
				__DIR__ . '/log_acessos.txt',
				"$nome - $idade anos" . PHP_EOL,
				FILE_APPEND
			);
		} else {
			$mensagem = "Acesso negado, $nome!";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Verificação de acesso</title>
</head>
<body>
	<h1>Verificação de acesso</h1>

	<form method="post">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required>

		<br><br>

		<label for="ano_nascimento">Ano de Nascimento:</label>
		<input type="number" id="ano_nascimento" name="ano_nascimento" required>

		<br><br>

		<button type="submit">Verificar acesso</button>
	</form>

	<?php if ($mensagem !== ''): ?>
		<p><?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?></p>
	<?php endif; ?>
</body>
</html>
