<?php
require_once 'funcoes.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$destinos = buscardestinoPorId($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Detalhes</title>
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1><?php echo $destinos['nome']; ?></h1>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $destinos['imagem']; ?>" class="detalhe-imagem" alt="<?php echo $destinos['nome']; ?>">
            </div>
            <div class="col-md-8">
                <p><strong>Região:</strong> <?php echo $destinos['regiao']; ?></p>
                <p><strong>Tipo de Turismo:</strong> <?php echo $destinos['tipo']; ?></p>
                <p><strong>Nota:</strong> <?php echo $destinos['nota']; ?>/10</p>
                <p><strong>Principais Atrações:</strong> <?php echo $destinos['atracoes']; ?></p>
                <p><strong>Descrição:</strong> <?php echo $destinos['descricao']; ?></p>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
</body>

</html>