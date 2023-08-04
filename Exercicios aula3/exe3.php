<?php 

$preço = 355;

$precoAcrescido = 1.12 * $preco;
$parcelas = $precoAcrescido / 10;

echo "Valor total da compra: R$ $precoAcrescido";
echo "<br/>Valor das parcelas: R$ $parcelas";
