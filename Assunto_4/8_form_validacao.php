<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <label for="nome">Nome</label>
        <input type="text" name="Nome" required> <br>

        <label for="email">E-mail</label>
        <input type="email" name="email"> <br>

        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" required></textarea> <br>

        <button type="submit">Enviar</button>
    </form>

    <!--parte logica-->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // recebe os dados 
        $nome = $_post['nome'];
        $email = $_post['email'];
        $mensagem = $_post['mensagem'];

        //validação dos campos (se estao vazios e se e-mail é valido)

        if (!empty($nome) &&!empty($email) && filter_var ($email, FILTER_VALIDADE_EMAIL) && !empty(&mensagem)) {
            echo "<p style='color: Darkgreen; '>Feedback enviado com sucesso!</p>";
        } else {
            echo "<p style='color: red; '>preencha todos os campos corretamente! </p>";
        }
    }
</body>
</html>