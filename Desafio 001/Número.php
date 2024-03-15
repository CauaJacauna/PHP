<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <center>
         <h1>Informe um número</h1>
         
         <?php
            $num = $_REQUEST["num"] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;
            echo "O número escolhido foi $num /n";
            echo "<br>O antecessor é $ant";
            echo "<br>O sucessor é $suc";
         ?>
    
        <button onclick="javascript:history.go(-1)">Voltar</button>
    <!-- <button onclick="javascript.window.location.href='index.html'">Voltar</button> OUTRA FORMA DE VOLTAR A PAGINA ANTERIOR-->
        </center>
    </main>
</body>
</html>
