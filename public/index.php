<?php
$nome = $_GET['nome'];
$santos = "Hello World! I'm learning PHP! $nome";
$n1 = true;
$n2 = false;
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
    <?= $n1 . $n2 ?>
</body>
</html>