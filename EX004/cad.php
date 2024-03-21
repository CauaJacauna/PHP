<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main>
        <?php
        $nome = $_REQUEST['nome'] ?? 'sem nome';
        $sobrenome = $_REQUEST['snome'] ?? 'desconhecido';

        echo ("É um prazer ter você aqui  $nome  $sobrenome");
// EX 004
       ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>    
    </main>
</body>
</html>