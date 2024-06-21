<!DOCTYPE html>
<html>
<head>
    <title>Criar Usuário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Criar Usuário</h1>
        <form method="POST" action="index.php?action=create">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" placeholder="somente o primeiro nome "  required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
        </br>
        <a href="index.php" class="btn btn-sm btn-danger"> Cancelar </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
