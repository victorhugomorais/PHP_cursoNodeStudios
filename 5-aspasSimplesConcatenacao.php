<?php
//aspas simples funciona, mas tudo dentro é considerado texto.
//aspas duplas reconhecem variáveis dentro delas.
$nome = 'vitola';

print('meu nome é $nome');

print("<hr>");

$idade = 23;

//para usar variáveis aqui, temos que concatenar, dessa forma:

print('meu nome é '.$nome.'e minha idade é: '.$idade.' anos de idade ');

print("<br>");

//para printar aspas simples, basta que utilizemos \antes do ' dentro da string
print('aqui temos que usar um \ antes da aspas simples, veja só:  \'viu?\' ');
print("<br>");
print("ou 'podemos usa aspas simples dentro de aspas duplas também'");

?>