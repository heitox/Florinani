<?php
require_once 'init.php';

if (isset($_GET['excluir'])) {
    $idExcluir = $_GET['excluir'];

    foreach ($_SESSION['materiais'] as $key => $material) {
        if ($material['id'] == $idExcluir) {
            unset($_SESSION['materiais'][$key]);
        }
    }

    // Reorganiza o array
    $_SESSION['materiais'] = array_values($_SESSION['materiais']);

    header("Location: funcionarios.php");
    exit;
}

// var_dump($_SESSION['materiais']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/funcionarios.css">
    <title>Área de Funcionários</title>
</head>
<body>
    <?php include 'partials/header.php'; 
    ?>
    <main class="site-main">
        <section class="tabela-materiais">
            <h2>Lista de Materiais</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <pre> ver se os dados estão chegando aqui  
                        <?php var_dump($_SESSION['materiais']); ?>
                    </pre> -->
                    <?php foreach ($_SESSION['materiais'] as $material): ?>
                    <?php $estoque = $material['estoque'] ?? 0; ?>
                    <tr>
                        <td><?php echo $material['id']; ?></td>
                        <td><?php echo $material['nome']; ?></td>
                        <td><?php echo $material['descricao']; ?></td>
                        <td>R$ <?php echo $material['preco']; ?></td>

                        <?php if ($estoque >= 100): ?>
                            <td><?php echo $estoque; ?> 🟢</td>
                        <?php elseif ($estoque >= 50): ?>
                            <td><?php echo $estoque; ?> 🟡</td>
                        <?php else: ?>
                            <td><?php echo $estoque; ?> 🔴</td>
                        <?php endif; ?>

                        <td>
                            <a href="funcionarios.php?editar=<?php echo $material['id']; ?>">
                            <button class="btn">Editar</button>
                            </a>
                        </td>

                        <td>
                            <a href="funcionarios.php?excluir=<?php echo $material['id']; ?>">
                            <button class="btn">Excluir</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
</body>
</html>