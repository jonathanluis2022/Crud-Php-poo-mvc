<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela de Usuarios</title>
</head>

<body>
    <header>
        <div class="cabecalho text-center my-4">
            <h1>Lista de Usuários</h1>
            <a href="index.php?action=create" class="btn btn-primary">Criar Novo Usuário</a>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="tabela mx-auto" style="width: 50%;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item): ?> <!--getAll da model , controller que pega os dados e coloca na view -->
                            <tr>
                                <td><?php echo $item['nome']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php echo $item['telefone']; ?></td>
                                <td class="actions d-flex"> 
                                    <a href="index.php?action=update&id=<?php echo $item['id']; ?>" class="btn btn-sm btn-info me-2">Editar</a>
                                    <a href="index.php?action=delete&id=<?php echo $item['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar este usuário?')" class="btn btn-sm btn-danger">Deletar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>
