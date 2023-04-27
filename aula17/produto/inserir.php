
<?php

require_once "../conexão.php";

$nome = $_POST["nome"];
$descricao = $_POST ["descricao"];
$preco= $_POST["preco"];
//String com o comando SQL oara ser executado do DB
$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) VALUES ('$nome', '$descricao', '$preco', 'semfoto.png');";
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->multi_query($sql);

//executa o SQL - Comando no Banco de Dados
//$comando->execute();
header("Location: form.php");
?>