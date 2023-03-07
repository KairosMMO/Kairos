<h2> Ordenação </h2>

<?php
$nomes = [];
$nomes[] = "Murilo";
$nomes[] = "Poliana";
$nomes[] = "Dalva";
$nomes[] = "Lavinia";
$nomes[] = "Camila";
$nomes[] = "Kaua";

for($i =1; $i <=5; $i++){
if ($nome [0] > $nomes[$i]) {
        $celBranco = $nomes[$i];
        $nomes[$i] = $nomes[0];
        $nomes[0] = $celBranco;

    }
}

