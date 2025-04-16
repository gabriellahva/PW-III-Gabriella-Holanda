<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Custo Estimado com Combustível</title>
</head>
<body>

<h2>Cálculo do Custo Estimado de Combustível</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $consumo_carro = floatval($_POST['consumo_carro']);
    $distancia = floatval($_POST['distancia']);
    $preco_litro = floatval($_POST['preco_litro']);


    $litros = $distancia / $consumo_carro;

    $custo_total = $litros * $preco_litro;

    echo "<h3>Custo Estimado com Combustível</h3>";
    echo "<p><strong>Distância:</strong> " ,$distancia, " km</p>";
    echo "<p><strong>Consumo do Carro:</strong> " ,$consumo_carro, " Km/l</p>";
    echo "<p><strong>Preço do Litro:</strong> R$ " ,$preco_litro, "</p>";
    echo "<p><strong>Custo Estimado:</strong> R$ " ,$custo_total, "</p>";
}
?>

<form action="" method="post">
    <label for="consumo_carro">Consumo do Carro (Km/l):</label><br>
    <input type="number" id="consumo_carro" name="consumo_carro" step="0.01" required><br><br>

    <label for="distancia">Distância a ser percorrida (km):</label><br>
    <input type="number" id="distancia" name="distancia" step="0.01" required><br><br>

    <label for="preco_litro">Preço do Litro de Combustível (R$):</label><br>
    <input type="number" id="preco_litro" name="preco_litro" step="0.01" required><br><br>

    <input type="submit" value="Calcular Custo">
</form>
</body>
</html>

