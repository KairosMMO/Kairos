<h2>Exercicio 4</h2>

<?php
 $aluno = [
    "nome" => "Poliana",
    "nota" => 7,
    "nota2" => 9
 ];

 $aluno2 = [
    "nome" => "Murilo",
    "nota" => 8,
    "nota2" => 5
 ];

 $aluno3 = [
    "nome" => "André",
    "nota" => 6,
    "nota2" => 7
 ];

 $tabela = [$aluno,$aluno2,$aluno3];

    foreach($tabela as $key => $value){
        echo $value["nome"] . "<br>" .  $value["nota"] . "<br>" . $value["nota2"];
    
}

?>