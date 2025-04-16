<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário do Vendedor</title>
</head>
<body>

<h2>Calculadora de Salário do Vendedor</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome_vendedor = $_POST['nome'];
    $salario_fixo = floatval($_POST['salario_fixo']);
    $total_vendas = floatval($_POST['total_vendas']);

    $comissao = $total_vendas * 0.15;

    $salario_final = $salario_fixo + $comissao;

    echo "<h3>Resumo do Salário do Vendedor</h3>";
    echo "<p><strong>Nome:</strong> " ,$nome_vendedor, "</p>";
    echo "<p><strong>Salário Fixo:</strong> R$ " ,$salario_fixo, "</p>";
    echo "<p><strong>Comissão (15% sobre vendas):</strong> R$ " ,$comissao,  "</p>";
    echo "<p><strong>Salário Final:</strong> R$ " ,$salario_final, "</p>";
}
?>

<form action="" method="post">
    <label for="nome">Nome do Vendedor:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="salario_fixo">Salário Fixo (R$):</label><br>
    <input type="number" id="salario_fixo" name="salario_fixo" step="0.01" required><br><br>

    <label for="total_vendas">Total de Vendas (R$):</label><br>
    <input type="number" id="total_vendas" name="total_vendas" step="0.01" required><br><br>

    <input type="submit" value="Calcular Salário">
</form>
</body>
</html>