<?php
$word = $_GET['word'];
$santos = "Hello World! I'm learning PHP! $word";

$n1 = 20; #variáveis PHP são dinâmicas, você não precisa definir o tipo primitivo dela
$n2 = 25;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/default.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>PHP & Mysql</h1>
    <p><?= $santos ?></p>
    <h1>Teste</h1>
    <?= $n1 . $n2 ?> <!--concatenação (não serve somente para strings)-->
    <p>----------</p>
    <?= $n1 + $n2 ?> <!--soma-->
    <p>----------</p>
    <?= $n1 - $n2 ?> <!--subtração-->
    <p>----------</p>
    <?= $n1 * $n2 ?> <!--multiplicação-->
    <p>----------</p>
    <?= $n1 / $n2 ?> <!--divisão-->
</body>
</html>