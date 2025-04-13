<?php
require_once 'funcoes.php';

$regiao = isset($_GET['regiao']) ? $_GET['regiao'] : '';
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';
$destinosFiltrados = filtrarDestinos(['regiao' => $regiao, 'tipo' => $tipo]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Filtrar Destinos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-principal" href="index.php">Destinos</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Filtrar Destinos</h1>
        <form method="GET" action="filtrar.php" class="mb-4">
            <div class="row">
                <div class="col-md-6">
                    <label for="regiao" class="form-label">Região</label>
                    <input type="text" class="form-control" name="regiao" id="regiao" value="">
                </div>
                <div class="col-md-6">
                    <label for="tipo" class="form-label">Tipo de Turismo</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" value="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Filtrar</button>
        </form>
    </div>
</body>

</html>