<?php
require_once 'funcoes.php';

if (!usuarioEstaLogado()) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    adicionarDestinos($_POST);
    $sucesso = "Destino cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Adicionar Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
<div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="index.php">Destinos</a>
            <div class="d-flex align-items-center">
                <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Adicionar Novo Destino</h1>
        <?php if (isset($sucesso)): ?>
            <div class="alert alert-success"><?php echo $sucesso; ?></div>
        <?php endif; ?>
        <form method="POST" action="protegido.php">
            <div class="mb">
                <label for="nome" class="form-label">Nome do Destino</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="mb">
                <label for="regiao" class="form-label">Região</label>
                <input type="text" class="form-control" name="regiao" id="regiao" required>
            </div>
            <div class="mb">
                <label for="tipo" class="form-label">Tipo de Turismo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" required>
            </div>
            <div class="mb">
                <label for="nota" class="form-label">Nota (0-10)</label>
                <input type="number" step="0.1" min="0" max="10" class="form-control" name="nota" id="nota" required>
            </div>
            <div class="mb">
                <label for="atracoes" class="form-label">Principais Atrações</label>
                <input type="text" class="form-control" name="atracoes" id="atracoes" required>
            </div>
            <div class="mb">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">URL da Imagem</label>
                <input type="text" class="form-control" name="imagem" id="imagem" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Destino</button>
        </form>
    </div>
</body>

</html>