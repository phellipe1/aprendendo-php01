<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Apresente-se pra nós</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"]  ?? "Fulano";
            $s = $_GET["sobrenome"] ?? "de Tal";
            echo "<p>É um prazer te conhecer, <strong>$n $s</strong>! Este é o meu site!";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>

</html>