<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7/4, '<br>';
echo intdiv(7,4), '<br>';// essa função retorna apenas a parte inteira da divisão
echo round(7 /4), '<br>';// essa função arredonda a divisão
echo 7 % 4, '<br>';// retorna o resto da divisão
echo 7 / 0.00001, '<br>';
//echo 7 / 0, '<br>'; //infinito
// echo intdiv(7,0); // retorna um erro
echo 4 ** 2, '<br>';

// Precedência de operadores:
//1º () = dentro dos parenteses
//2º ** = depois exponenciação
//3º / * % = depois divisão, multiplicação e módulo
//4º + - = por final soma e subtração

echo  '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3)*4, '<br>';
echo 2 + 3 * 4 **2, '<br>';
echo ((2+3)*4)**2, '<br>';

