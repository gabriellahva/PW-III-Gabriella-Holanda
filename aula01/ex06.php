
<?php

$valorproduto = 350;

$desconto = $valorproduto * 0.07;

$valordesconto = $valorproduto - $desconto;

echo "Valor original: R$ ", $valorproduto, "\n";
echo "Valor do desconto de 7%: R$ ", $desconto, "\n";
echo "Valor com desconto: R$: ", $valordesconto, "\n";

?>