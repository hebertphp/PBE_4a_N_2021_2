<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="recebe.php" method="post">
        <pre>
        <label for="nome">Nome</label>  <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" required> *
        
        Senha <input type="password" name="senha" required> *

        Cep   <input type="text" name="cep" id="cep" value="05020-123" >

              <input type="hidden" name="cidade" value="São Paulo">     
              <input type="submit">
        </pre>
    </form>
</body>
</html>