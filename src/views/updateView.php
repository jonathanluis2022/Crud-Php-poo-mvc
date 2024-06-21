<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
    <link rel="stylesheet" type="text/css" href="/css/updateView.css">
</head>
<body>
    <h1>Editar Usuário</h1>
    <form method="POST" action="index.php?action=update&id=<?php echo $data['id']; ?>">
        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $data['nome']; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $data['email']; ?>" required><br>
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" value="<?php echo $data['telefone']; ?>" required><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
