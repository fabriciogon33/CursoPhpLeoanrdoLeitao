<div class="titulo">Desafio String</div>

<?php

//Enunciado:
//Avaliando os métodos da documentação da string,
// qual métodos que a posição do texto 'abc' na string
//'AbcaBcabc' retorne
echo strpos('!AbcaBcabc', 'abc') . '<br>';//acha a posição considerando maiusculas e minúsculas
echo stripos('!AbcaBcabc', 'abc') . '<br>';//acha desconsiderando maiúsculas e minúsculas

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));