<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu tambemm");
echo '<br>';

// concatenação
echo "Nós também" . ' somos';
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print"<br>Também existe a função print";

//Algumas funções
echo '<br>' . strtoupper('maximizado');// tudo maiusculas
echo '<br>' . strtolower('MINIMIZADO');//tudo minúsculas
echo '<br>' . ucfirst('só a primeira letra');// só a primeira letra da frase em maiúscula
echo '<br>' . ucwords('todas as palavras');//todas as palavras da frase com a primeira letra em maiúsculas
echo '<br>' . strlen('Quantas letras?');// retorna quantidade de letras da string
echo '<br>' . mb_strlen('Eu também', "utf-8");// retorna a quantidade de letras seguindo o padrão utf-8(com acentos)
echo '<br>' . substr('Só uma parte mesmo', 7, 6);//lê a partir do indice '7' e para após contar '6' letras sem adicionar a ultima
echo '<br>' . str_replace ('isso', 'aquilo', 'Trocar Isso por isso');
