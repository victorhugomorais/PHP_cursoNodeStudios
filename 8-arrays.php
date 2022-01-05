<?php

$carros = array("BMW", "Veloster", "Hillux", 99=>"Audi");
//para printar arrays temos a função print_r
$carros[] = "amaroke";

print_r($carros);

print("<br>");
echo $carros[0];
print("<br>");
echo $carros[1];
print("<br>");
echo $carros[99];
print("<br>");
print("<hr>");

$motos = array();
$motos[] = "yamaha";
$motos[] = "honda";

print_r($motos);
print("<br>");
print("<hr>");

$clientes = ["felipe", "carlos", 'bia'];
print_r($clientes);
print("<hr>");


//Curso de PHP 7 - Aula 13 - Arrays #2Curso de PHP 7 - Aula 13 - Arrays #2Curso de PHP 7 - Aula 13 - Arrays #2
print("<hr>");
print("Curso de PHP 7 - Aula 13 - Arrays #2"    );
//numero de elementos num array
print("Há funções para mostrar o numero de elementos num array");
$tam = count($carros);
print("<br>");
echo "array carros possui: ".$tam.' elementos e array motos possui: '.count($motos).' elementos.';

print("<hr>");

//percorrendo array/vetor com foreach
foreach($carros as $i){
    echo $i."<br>";
}

print("<hr>");

foreach($clientes as $cX){
    echo $cX." ";
}

print("<hr>");

foreach ($motos as $mX){
    echo $mX."<br>";
}

//Aula 14 - Arrays #3 Aula 14 - Arrays #3 Aula 14 - Arrays #3 Aula 14 - Arrays #3 Aula 14 - Arrays #3 Aula 14 -
print("<hr>");
print("Aula 14 - Arrays #3");
print("<br>");
//arrays associativos
print("rrays associativos");
print("<br>");
$pessoa = array ("nome" => "vitola", "idade" => 23, "altura" =>1.90);
$pessoa["cidade"] = "cabo frio";
echo $pessoa["altura"];
print("<br>");

print_r($pessoa);

print("<hr>");

//$p => $valor 
//pois é assim que declaramos arrays associativos na linha 66
foreach($pessoa as $p => $valor){
    echo $p.":".$valor."<br>";
}
print("<hr>");

//ARRAY MULTIDIMENSIONAL
$cidades = array(
    "cariocas"=> array("cabo frio", "niteroi","rj"),
    "paulistas"=> array("sp", "santos"),
    "mineiras"=> array("sete lagoas", "iguatama")
);
echo $cidades["mineiras"][1];

print("<hr>");

foreach($cidades as $c ){
    echo $c;
}


#jeito2
// $times = ["cariocas" => ["vasco", "flamengo"] ,
//         "paulistas" => ["sp", "palmeiras"] ,
//         "mg" => ["minas", "sem praia"] ];

// echo $times["cariocas"][0];
// echo "<br>";
// echo $times["mg"][1];

?>