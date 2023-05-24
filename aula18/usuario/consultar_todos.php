<?php

require_once "../conexao.php";



//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario` ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegae o resultado da consulta
$resultado = $comando ->get_result();

//cria um vetor vazio
$usuarios = [];

//pegar a todas linha de resultado
while($usuario = $resultado ->fetch_assoc()){
    //adiciona o produto (linha do resultado) no vetor
    $usuarios[] = $usuario;
}

