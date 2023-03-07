
<?php
$nomes = [];
$nomes[] = "Murilo";
$nomes[] = "Poliana";
$nomes[] = "Dalva";
$nomes[] = "Lavinia";
$nomes[] = "Kaua";

echo "<ol>";
for ($contador=0; $contador<=4;$contador++) {
    echo "<li>$nomes[$contador]</li>";
}
echo "</ol>";
?>

