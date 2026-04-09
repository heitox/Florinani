<?php
require_once 'init.php';

$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
// print '<pre>';
// print_r($categorias);
// print_r($_SESSION['produtos']);
// print '</pre>';
//  if (isset($_GET['categoria'])) {
//   print $_GET['categoria'];
//  }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php 
  require_once 'partials/header.php';
  if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1') {
  print '<p class="aviso">Produto adicionado com sucesso!!!</p>';
}
  ?>

  <main class="site-main">
    <h1 class="secao-titulo">Catálogo de produtos</h1>
 
    <?php
      echo '<nav class="filtros-categoria" aria-label="Categorias">';
      echo '<a href="produtos.php" class="ativo">Todas</a>';
      foreach($categorias as $kcat => $nome) {
        echo '<a href="produtos.php?categoria='.$kcat.'">'.$nome.'</a>';
      }
      echo '</nav>';
    
      echo '<div class="cards-grid cards-grid--catalog">';
    foreach($_SESSION['produtos'] as $produto) {

      if ($categoria_get == '' || $produto['categoria'] == $categoria_get ) {

      echo '<article class="card">
        <img class="card__img" src="'.$produto['imagem'].'" alt="">
        <div class="card__body">
          <h3>'.$produto['nome'].'</h3>
          <p class="card__categoria">'.$produto['categoria'].'</p>
          <p class="card__preco">'.$produto['preco'].'</p>
          <a href="produto-detalhe.php">Ver detalhes</a>
        </div>
      </article>';
      }
    }

    echo '</div>';
    ?>
  </main>

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
