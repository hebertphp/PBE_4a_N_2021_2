<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <style>
        label{
            margin-right: 100px;
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
    </style>    
</head>
<body>
    <h1>Formulário PHP</h1>
    <form action="recebe.php">
        <div class="form">
            <div class="g_form">
                <label for="txt_nome">Nome:</label> 
                <input type="text" name="txt_nome">
            </div>
            <div class="g_form">
                <label for="txt_mail">E-mail:</label> 
                <input type="text" name="txt_mail" required>
            </div>
            <input type="submit">
        </div>
    </form>
    
</body>
</html>