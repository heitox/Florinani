<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$ids = array_column($_SESSION['materiais'], 'id');
$novoId = $ids ? max($ids) + 1: 1;

$_SESSION['materiais'][] = [
         'id' => $novoId,
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'categoria' => $_POST['categoria'],
        'descricao' => $_POST['descricao'],
        'imagem' => $_POST['imagem']
    ];
    header('Location: materiais.php?materialadd=1');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Material - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>

  <main class="site-main">
    <h1 class="secao-titulo">Cadastro de Material</h1>
    <p><strong>Imagem:</strong> informe apenas o <em>caminho ou URL</em> do arquivo (sem upload real nesta atividade).</p>

    <form class="formulario" action="cadastro-materiais.php" method="post">
      <label for="nome">Nome do Material</label>
      <input type="text" id="nome" name="nome" required>

      <label for="preco">Preço (ex.: 120,50)</label>
      <input type="text" id="preco" name="preco" required>

      <label for="categoria">Categoria</label>
      <select id="categoria" name="categoria" required>
        <option value="">Selecione</option>
        <option value="bruto">Bruto</option>
        <option value="ferramentas">Ferramentas</option>
        <option value="acabamentos">Acabamentos</option>
      </select>

      <label for="descricao">Descrição</label>
      <textarea id="descricao" name="descricao" required></textarea>

      <label for="imagem">Caminho ou URL da imagem</label>
      <input type="text" id="imagem" name="imagem" placeholder="https://... ou C:\pasta\imagem.jpg" required>

      <button type="submit" class="btn">Cadastrar</button>
    </form>
  </main>

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
