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

// BOTOES MAIS E MENOS
if (isset($_GET['mais'])) {
    $id = $_GET['mais'];

    foreach ($_SESSION['materiais'] as &$material) {
        if ($material['id'] == $id) {
            $material['estoque'] = ($material['estoque'] ?? 0) + 1;
        }
    }
    unset($material);

    header("Location: funcionarios.php");
    exit;
}

if (isset($_GET['menos'])) {
    $id = $_GET['menos'];

    foreach ($_SESSION['materiais'] as &$material) {
        if ($material['id'] == $id) {
            if (($material['estoque'] ?? 0) > 0) {
                $material['estoque']--;
            }
        }
    }

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

                    <?php 
                    $totalEstoque = 0;
                    $totalValor = 0;
                    ?>
                    <?php foreach ($_SESSION['materiais'] as $material): ?>
                    <?php $estoque = $material['estoque'] ?? 0; ?>
                    <?php $totalEstoque += $estoque; ?>
                    <?php $totalValor += ($material['preco'] * $estoque); ?>

                    <tr>
                        <td><?php echo $material['id']; ?></td>
                        <td><?php echo $material['nome']; ?></td>
                        <td class="descricao"><?php echo $material['descricao']; ?></td>
                        <td class="preco">R$ <?php echo number_format($material['preco'], 2, ',', '.'); ?></td>     

                            <td class="estoque-container">
                                <a href="funcionarios.php?menos=<?php echo $material['id']; ?>">
                                    <button class="btn-menos">-</button>
                                </a>

                            <span class="estoque-valor">
                                <?php if ($estoque >= 100): ?>
                                    <?php echo $estoque; ?> 🟢
                                <?php elseif ($estoque >= 50): ?>
                                    <?php echo $estoque; ?> 🟡
                                <?php else: ?>
                                    <?php echo $estoque; ?> 🔴
                                <?php endif; ?>
                            </span>

                                <a href="funcionarios.php?mais=<?php echo $material['id']; ?>">
                                    <button class="btn-mais">+</button>
                                </a>
                        </td>

                        <td>
                            <a href="funcionarios.php?editar=<?php echo $material['id']; ?>">
                                <a href="editar-materiais.php?id=1">
                                    <button class="btn-editar">Editar</button>
                                </a>
                            </a>
                        </td>

                        <td>
                            <a href="funcionarios.php?excluir=<?php echo $material['id']; ?>">
                                <button class="btn-excluir">Excluir</button>
                            </a>
                        </td>

                    </tr>  

                    <?php endforeach; ?>

                    <tr class="total">
                        <td colspan="4"><strong>Total:</strong></td>

                        <td>
                            <strong><?php echo $totalEstoque; ?> unidades</strong>
                        </td>

                        <td class="preco" colspan="2">
                            <strong>
                            <?php echo "R$ " . number_format($totalValor, 2, ',', '.'); ?>
                            </strong>
                        </td>
                    </tr>   
                </tbody>
            </table>
        </section>
     </main>

    <?php 
    require_once 'partials/footer.php';
    ?>
</body>
</html>