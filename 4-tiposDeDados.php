<?php
//escalares
//strings
$nome = "Olá mundo ";
var_dump($nome);
// o var_dump nos diz que o $nome é uma string de 10 posições

echo "<hr>";

if(is_string($nome)):
    echo "É uma string";
else:
    echo "não é uma string";
endif;

echo "<hr>";

if(is_integer($nome)):
    echo "É um inteiro";
else:
    echo "não é um inteiro";
endif;

echo "<hr>";

//INTEIROS /INTEGER / INT
$idade = 23;
var_dump($idade);

echo "<hr>";

if(is_integer($idade)):
    echo "É um inteiro";
else:
    echo "não é um inteiro";
endif;

echo "<hr>";
//FLOAT 
$altura = 1.77;
var_dump($altura);

echo "<hr>";

if(is_float($altura)):
    echo "É um float";
else:
    echo "não é um float";
endif;

echo "<hr>";

$admin = true;
var_dump($admin);

echo "<br>";

if(is_bool($admin)):
    print "É boolean";
else:
    print "Não é booleana";
endif;

echo "<hr>";

//DADOS COMPOSTOS
$carros = array("Gol","Uno", "Camaro", 1 , 10.5 , true); 
var_dump($carros);

echo "<hr>";

//OBJETOS
class Cliente{
    public $nome;
    public function setNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->setNome("Victor");
var_dump($cliente);

print("<br>");

if(is_object($cliente)):
    print "É objeto";
else:
    print "Não é objeto";
endif;

print("<hr>");

//ESPECIAIS
//NULL
$cidade = NULL;
var_dump($cidade);

//RESOURSE
//conexão com banco de dados
//conexao com arquivo
//etc



?>