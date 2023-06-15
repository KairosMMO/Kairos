<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>
<?php require_once "../conexao.php"; ?>


<div class="container">
        <h1>Produtos</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir cliente
            </a>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        </div>

        <table class="table" id="MyTable">
        <thead>
            <tr>
                <th scope="col">nome</th>
                <th scope="col">cpf</th>
                <th scope="col">telefone</th>
                <th scope="col">endereço</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($clientes as $cliente){ ?>
            <tr>
                <th scope="row"><?php echo $cliente['nome']; ?></th>

                <td><?php echo $cliente['cpf']; ?></td>

                <td> <?php echo $cliente['telefone']; ?>

                <td> <?php echo $cliente['endereco']; ?>
              </td>
                <td>
                  <a href="excluir.php?id=<?php echo $cliente['id']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $cliente['id']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>

        <?php require_once "../template/rodape.php"; ?>

  </div>