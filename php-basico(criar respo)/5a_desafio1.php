<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle de Acesso</title>
</head>
<body>

    <h2>Verificação de Acesso</h2>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>Ano de Nascimento:</label>
        <input type="number" name="ano_nascimento" required>

        <br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $anoNascimento = $_POST["ano_nascimento"];

        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNascimento;

        if ($idade >= 18) {
            echo "<p>Acesso permitido, $nome!</p>";

            $log = "Nome: $nome | Idade: $idade | Data: " . date("d/m/Y H:i:s") . PHP_EOL;
            file_put_contents("log_acessos.txt", $log, FILE_APPEND);
        } else {
            echo "<p>Acesso negado, $nome!</p>";
        }
    }
    ?>

</body>
</html>