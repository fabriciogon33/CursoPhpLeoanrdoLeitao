<div class="titulo">If Else</div>

<?php
if (true)
    echo "Serei impresso?<br>";
if(false)
    echo "serei impresso?<br>";
    echo "serei impresso novamente<br>"; // para ficar mais de uma linha 
    //é necessário que esteja dentro de um bloco de código

if(true){
    echo "serei impresso?<br>";
    echo "serei impresso novamente?";
}
echo '<br>';
if(false)
    echo "Verdadeiro<br>";
else
    echo "Falso<br>";
echo "Fim<br>";

if (false){
    echo "Verdadeiro - Parte A <br>";
    echo "Verdadeiro - Parte b <br>";
} else {
    echo "Falso - Parte A <br>";
    echo "Falso - Parte B <br>";
}

if(false){
    echo "Passo A <br>";
} else if(false){
    echo "Passo B <br>";
} else if (false){
    echo "Passo C <br>";
} elseif (true){
    echo "Passo D <br>";
} else {
    echo "Passo E <br>";
}

echo "Fim <br>";