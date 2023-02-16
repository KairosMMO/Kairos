<h2>Operadores Lógicos</h2>
<hr>
É utilizado para avaliar uma expressão formada
 por um conjunto de operadores Lógicos
<ul>
    <li>And | E</li>
    <li>or | OU</li>
    <li>&& | E</li>
    <li>|| | OU</li>
    <li>! | NÃO</li>
    <li>xor | Ou Exclusivo</li>
</ul>
<h3>Tabela Verdade - E</h3>
<table border="1">
<tH colspan=3>
        Tabela do E
    </tH>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>

<strong> Exemplo </strong>

Murilo disse a Bruna que iria ao parque se:
<ol>
 <li>Domingo estivesse de sol </li>
 <li>Tivesse realizado todas as atividades do IF.</li>
</ol>
<?php
    $condicao1 = true;
    $condicao2 = false;
    $acao_murilo  = $condicao1 and $condicao2;
        var_dump ($acao_murilo);
?>

<h3>Tabela Verdade - OU</h3>

<table border="1">
<tH colspan=3>
        Tabela do OU
    </tH>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>

<strong> Exemplo </strong>

Murilo disse a Bruna que iria ao parque se:
<ol>
 <li>Domingo estivesse de sol </li>
 <li>Tivesse realizado todas as atividades do IF.</li>
</ol>
<?php
    $condicao1 = true;
    $condicao2 = false;
    $acao_murilo  = $condicao1 or $condicao2;
        var_dump ($acao_murilo);
?>

<h3>Tabela Verdade </h3>

<table border="1">
<tH colspan=3>
        Tabela do Não
    </tH>
    <tr>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
    </tr>
</table>

<strong> Exemplo </strong>

Murilo é um cara legal:<br>

<?php
    $condicao1 = true;
    $acao_murilo  = !(!$condicao1);
        var_dump ($acao_murilo);
?>
