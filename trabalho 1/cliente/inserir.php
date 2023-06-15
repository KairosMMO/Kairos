
<?php

require_once "../conexao.php";

if(isset($_POST["nome"])  && isset($_POST["cpf"]) 
&& isset($_POST["telefone"]) && isset($_POST["endereco"]))
{



$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];


//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `clientes`(`nome`, `cpf`, `telefone`, `endereco`) 
        VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssss", $nome, $cpf, $telefone, $endereco);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
