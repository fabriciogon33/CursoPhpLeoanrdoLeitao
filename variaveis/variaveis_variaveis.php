<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';// quando se coloca dois $$ é comparavel a montar uma nova variável = $valorA
// ou seja $$a = $+o conteudo da variável $a => $$a = $valorA e ambas estão recebendo o a string =
// valorAA 
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
echo $epa;
$opa = 'vish';
echo $opa;
$vish = 'eita!!!';
echo '<br>' . " $epa {$$epa} {$$$epa}";