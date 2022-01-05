<?php

define("nome", "victola");
define("idade", 23);
define("altura", 1.88);

echo nome;
print("<br>");
echo altura;
print("<br>");
echo idade;
print("<br>");
echo("meu nome é".nome."tenho".altura."de altura e tenho ".idade."anos de idade");

print("<hr>");

define("times", ["vasco","flamengo","santos"]);
print(times[0]);
print(times[1]);
print(times[2]);


/*

for($i = 0; $i<3; $i=$i + 1):
    print(times[i]);


    */
    print("<hr>");

    function exibeConstante(){
        print(times[1]); 
        print("<br>");
        print("constantes são globais, logo podemos usa-las dentro do escopo de funções tranquilamente");
    }

    exibeConstante();
?>