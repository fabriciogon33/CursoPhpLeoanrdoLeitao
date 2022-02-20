<div class="titulo">Atribuições</div>
<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 1;
echo '<br>'. $numero;
$numero = $numero + 1.5;
echo '<br>'. $numero;
echo '<br>', var_dump($numero);
$numero--;//notação pósfixada =  //$numero = $numero + 1
echo '<br>'. $numero;
--$numero;//notação préfixada =  //$numero = $numero + 1
echo '<br>'. $numero;
$numero++; //$numero = $numero + 1
echo '<br>'. $numero;
++$numero; //$numero = $numero + 1
echo '<br>'. $numero;
$numero -= 5; //atribuição subtrativa = $numero - 5 unidades
echo '<br>'. $numero;
$numero += 5; //atribuição aditiva = $numero + 5 unidades
echo '<br>'. $numero;
$numero *= 10; // atribuição multiplicativa
echo '<br>'. $numero;
$numero /= 2; // atribuição divisiva
echo '<br>'. $numero;
$numero %= 6; //atribuição de mdulo
echo '<br>'. $numero;
$numero **= 4; // atribuição de uma potência
echo '<br>'. $numero;
$numero .=4; // apenas concatenação
echo '<br>'. $numero;
$numero += 5;
echo '<br>'. $numero;

$texto = 'Esse é um texto';
echo '<br>'. $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade';
echo '<br>' . $texto;

//$variavelInexistente = 'valor existente';
echo '<br>'. $variavelInexistente;
$valor = $variavelInexistente ??  'valor default'; //caso não exista valor ele adota o 'valor default' como padrão
echo '<br>' . $valor;

