<?php
require_once 'funcoes.php';

$termo = isset($_GET['busca']) ? $_GET['busca'] : '';
$destinosFiltrados = filtrarDestinos(['busca' => $termo]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Destinos Turísticos do Paraná</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container d-flex justify-content-between align-items-center">
            <form class="d-flex" method="GET" action="index.php">
                <input class="form-control me-2" type="search" name="busca" placeholder="Destinos" value="">
                <button class="btn btn-primary" type="submit">Filtrar</button>
            </form>
            <div class="d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
                <a href="login.php" class="btn btn-primary">Adicionar destinos</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Destinos Turísticos do Paraná</h1>
        <div class="row">
            <?php foreach ($destinosFiltrados as $destino): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $destino['imagem']; ?>" class="imagem-principal" alt="<?php echo $destino['nome']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $destino['nome']; ?></h5>
                            <p class="card-text"><?php echo $destino['tipo']; ?></p>
                            <a href="detalhes.php?id=<?php echo $destino['id']; ?>" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>