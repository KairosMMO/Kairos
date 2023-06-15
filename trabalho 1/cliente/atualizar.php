<?php

require_once "../conexao.php";

if(isset($_POST["nome"])  && isset($_POST["cpf"]) 
&& isset($_POST["telefone"]) && isset($_POST["endereco"]))
{

 $nome = $_POST["nome"];
 $cpf = $_POST["cpf"];
 $telefone = $_POST["telefone"];
 $endereco = $_POST["endereco"];
 $id = $_POST["id"];

 
 //string com o comendo sql para ser executoado no db
 $sql = "UPDATE clientes SET `nome`=?, `cpf`=?, `telefone`=?, `endereco`=? WHERE  `id`=?;";
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssssi", $nome, $cpf, $telefone, $endereco, $id);
 //executa o sql - comando no banco de dados
 $comando->execute();
}
 //abre o arquivo form.php
 header("location: index.php");




