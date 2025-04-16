<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor de um Número</title>
</head>
<body>

<h2>Antecessor</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = intval($_POST['valor']);

    $antecessor = $valor - 1;

    echo "<h3>Resultado</h3>";
    echo "<p>O antecessor de $valor é $antecessor.</p>";
}
?>

<form action="" method="post">
    <label for="valor">Digite um valor:</label><br>
    <input type="number" id="valor" name="valor" required><br><br>

    <input type="submit" value="Calcular Antecessor">
</form>
</body>
</html>

