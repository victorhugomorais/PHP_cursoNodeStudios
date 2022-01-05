<?php

$nome = "victor";
$a = 1;
$b = 2;
$c = 3;
function exibeNome(){
    global $nome;
    printf($nome);
}

exibeNome();    

print("<hr>");
/////////////////////

function exibeCidade(){
    global $cidade;
    $cidade = "ilheus";
}

exibeCidade();
echo $cidade;
///////////////////////
print("<hr>");

function soma(){
    $res = $GLOBALS['a']+ $GLOBALS['b']+ $GLOBALS['c'];
    echo("$res");
}

soma();

?>