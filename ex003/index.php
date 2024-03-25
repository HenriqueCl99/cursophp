<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    $canal = "Curso em vídeo";
    $ano = date('Y');
    echo <<< TESTE
        Olá pessoal do $canal! 
                Tudo bem com vocês?
            Como está sendo ese ano de $ano?
        Abraços! \u{1F596}
        TESTE;    
    ?>
</body>
</html>