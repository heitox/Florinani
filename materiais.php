<?php
require_once 'init.php';

$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>materiais - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php 
  require_once 'partials/header.php';
  if (isset($_GET['materiaisadd']) && $_GET['materiaisadd'] === '1') {
  print '<p class="aviso">materiais adicionado com sucesso!!!</p>';
}
  ?>

  <main class="site-main">
    <h1 class="secao-titulo">Catálogo de materiais</h1>
 
    <?php
      echo '<nav class="filtros-categoria" aria-label="Categorias">';
      echo '<a href="materiais.php" class="ativo">Todas</a>';
      foreach($categorias as $kcat => $nome) {
        echo '<a href="materiais.php?categoria='.$kcat.'">'.$nome.'</a>';
      }
      echo '</nav>';
    
      echo '<div class="cards-grid cards-grid--catalog">';
    foreach($_SESSION['materiais'] as $materiais) {

      if ($categoria_get == '' || $materiais['categoria'] == $categoria_get ) {

      echo '<article class="card">
        <img class="card__img" src="'.$materiais['imagem'].'" alt="">
        <div class="card__body">
          <h3>'.$materiais['nome'].'</h3>
          <p class="card__categoria">'.$materiais['categoria'].'</p>
          <p class="card__preco">'.$materiais['preco'].'</p>
          <a href="materiais-detalhe.php">Ver detalhes</a>
          <a href="materiais-detalhe.php">Ver detalhes</a>
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
