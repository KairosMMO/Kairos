<h2>Estruturas de condição</h2>
<hr>
<p>
    A estrutura de condição é utilizada para avaliar 
    qual a instrução deve ser executada, dada uma condição.

    Se a condição for verdadeira (true) executa a instrução 1, caso contrário executa a intrução 2


<strong>Exemplo</strong>
<pre>
        if(<em>condicao</em>){
            //instrução 1
        }else{
            //instrução 2
    }
</pre>
</p>

<?php
    /* Para passar de ano é necessário tirar no minimo 6 pontos em cada disciplina. Murilo 
    tirou .... Ele for aprovado ou não?
    */
    $nota_do_murilo = 6;
    $faltas = 74;
    //            V
    if($nota_do_murilo >= 6 && $faltas < 75){
        echo "Murilo foi aprovado!";
    } else {
        echo"Murilo foi reprovado!";
    }

?>
<strong>exemplo 2</strong>
    <p> O aluno para se aprovado precisa obter
        nota superior a 6 pontos, para o exame final
        precisa ter tirado menos que 6 e mais que 3 pontos.
        notas menores que 3 são reprovações diretas.
    </p>

    <?php
    $nota = 6;
    if($nota >= 6){
        echo "aprovado"
    } else if if ($nota > 3) {
        echo"Faz exame final";
    } else {
        echo "Reprovado";
    }
?>