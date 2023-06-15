
<?php require_once "consultar_por_id.php" ?> 
<?php require_once "../template/cabecalho.php"; ?>

<h1>Cadastro de clientes</h1>
    <hr>

    <form action="<?php echo isset($cliente) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"

    enctype="multipart/form-data">

       <label for="nome">Nome</label><br>
       <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome'] ?? ""; ?>"><br>
       <input type="hidden" name="id" id="id" value="<?php echo $cliente['id'] ?? ""; ?>"><br>

       <label for="telefone">Telefone</label><br>
       <input  name="telefone" id="telefone"><?php echo $cliente['telefone'] ?? ""; ?></input><br>

       <label for="cpf">CPF</label><br>
       <input  name="cpf" id="cpf"><?php echo $cliente['cpf'] ?? ""; ?></textarea><br>

       <label for="endereco">Endereco</label><br>
       <textarea  name="endereco" id="endereco"><?php echo $cliente['endereco'] ?? ""; ?></textarea><br>

       <br>
       <button type="submit">Cadastrar</button>
       
      
    </form>