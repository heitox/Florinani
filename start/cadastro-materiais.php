<?php
require_once 'init.php';

// print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$ids = array_column($_SESSION['produtos'], 'id');
$novoId = $ids ? max($ids) + 1: 1;

$_SESSION['produtos'][] = [
         'id' => $novoId,
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'categoria' => $_POST['categoria'],
        'descricao' => $_POST['descricao'],
        'imagem' => $_POST['imagem']
    ];
    header('Location: produtos.php?produtoadd=1');
    exit;
    }
    // print '<pre>';
    // print_r($_SESSION['produtos']);
    // print '</pre>';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de produto - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>

  <main class="site-main">
    <h1 class="secao-titulo">Cadastro de produto</h1>
    <!-- <p>Formulário estático. Na pasta <strong>end</strong>, os dados serão enviados por <strong>POST</strong> e adicionados ao array em sessão.</p> -->
    <p><strong>Imagem:</strong> informe apenas o <em>caminho ou URL</em> do arquivo (sem upload real nesta atividade).</p>

    <form class="formulario" action="cadastro-produto.php" method="post">
      <label for="nome">Nome do produto</label>
      <input type="text" id="nome" name="nome" required>

      <label for="preco">Preço (ex.: 120,50)</label>
      <input type="text" id="preco" name="preco" required>

      <label for="categoria">Categoria</label>
      <select id="categoria" name="categoria" required>
        <option value="">Selecione</option>
        <option value="informatica">Informática</option>
        <option value="livros">Livros</option>
        <option value="papelaria">Papelaria</option>
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
