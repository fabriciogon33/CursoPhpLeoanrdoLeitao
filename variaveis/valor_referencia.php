<div class="titulo">Valor vc Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuição por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo " $variavelValor";

//Atribuição por valor
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo "<br> $variavel";
echo "<br> $variavelReferencia";
$variavel = 'mudei mesmo';
echo "<br> $variavel";
echo "<br> $variavelReferencia";