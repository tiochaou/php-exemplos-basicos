<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <form method="post" action="">
        <!-- Campo para nome -->
         <label for="nome">Nome:</label>
         <input type="text" name="nome" require>

         <!-- Campo para Senha -->
          <label for="senha">Senha:</label>
          <input type="passoword" name="senha" require>

          <!-- Botão de envio -->
           <button type="submit">Entrar</button>
    </form>

    <!-- Lógica em PHP -->
    <?php
    // Verifica se o formulário foi enviado
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $_nome = $_POST['nome'];
        $_senha = $_POST['senha'];

        // Abre o arquivo usuários.txt para leitura "read - r"
        $_arquivo = fopen('usuarios.txt', 'r');
        $login_sucesso = false;

        //le cada linha do arquivo
        while (($linha = fgets($arquivos)) !==false) {

        //divide a linha pelo delimitador "neste caso o ; "
        list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));
        
        //verifica se o nome e senha corresponde no arquivo "usuarios.txt"
        if($nome == $usuario_arquivos && $senha == $senha_arquivo ){
            $login_sucesso = true;
            break;
        }

    }

    //fecha arquivo
    fclose($arquivos);

    //exibi mensagem de sucesso ou erro
    if($login_sucesso) {
     echo "<p style = 'color: darkgreen; '>login realizado com sucesso!<br>bem vindo, $nome!</p>";}
     else{
        echo = "<p style='color:red;'>usurio ou senha incorretos.</p>"
;     }

    ?>
</body>
</html>