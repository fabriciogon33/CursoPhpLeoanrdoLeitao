<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; //interpolação é a interpretação de uma variável dentro de um texto
echo "<br> $numero";
$texto = " A sua nota é: $numero";
echo '<br>'. $texto;
echo "<br> $texto";
$objeto = 'Caneta';
echo "<br> Eu tenho 5 $objetos";
echo "<br> Eu tenho 5 {$objeto}s.";
echo "<br> Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s";// ele não considera o espaço final, mas considera o inicial