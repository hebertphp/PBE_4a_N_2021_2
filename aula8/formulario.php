<?php
$uf=array("RN","AM","MG","ES","RJ","SP","BA","TO","PA","PR","RS","SC");
sort($uf);
?>

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
              
        Qual sistema operacional você usa?
            
            <input type="checkbox" name="windows" value="windows" checked> Windows
            <input type="checkbox" name="linux"   value="linux"> Linux

        Você está conectado na rede 4G nesse momento?
            <input type="radio" name="rede_4g" value="sim"> Sim 
            <input type="radio" name="rede_4g" value="não"> Não
        
        Selecione o UF <select name="uf">   
        <?php
          foreach($uf as $pos=>$valor)
            echo "<option value='$valor'>$valor</option>";
        ?>
        </select>    
        
        Digite sua observação <textarea name="obs">Digite..</textarea>
              <input type="submit"> <input type="reset">
        </pre>
    </form>
</body>
</html>