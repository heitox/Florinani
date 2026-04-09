<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>

  <main class="site-main">
    <section class="hero" aria-labelledby="titulo-hero">
      <h1 id="titulo-hero">Bem-vindo à Livraria do Rodrigo</h1>
      <p>Conteúdo estático em HTML e CSS. Na próxima etapa usamos PHP para reaproveitar cabeçalho, rodapé e dados.</p>
    </section>

    <section aria-labelledby="titulo-mais-vendidos">
      <h2 id="titulo-mais-vendidos" class="secao-titulo">Produtos mais vendidos</h2>
      <div class="cards-grid">
        <article class="card">
          <img class="card__img" src="https://picsum.photos/seed/notebook/400/200" alt="">
          <div class="card__body">
            <h3>Notebook Estudo</h3>
            <p>Ideal para aulas e projetos.</p>
            <p class="card__preco">R$ 2.499,00</p>
          </div>
        </article>
        <article class="card">
          <img class="card__img" src="https://picsum.photos/seed/mouse/400/200" alt="">
          <div class="card__body">
            <h3>Mouse sem fio</h3>
            <p>Conforto para o dia a dia.</p>
            <p class="card__preco">R$ 89,90</p>
          </div>
        </article>
        <article class="card">
          <img class="card__img" src="https://picsum.photos/seed/teclado/400/200" alt="">
          <div class="card__body">
            <h3>Teclado mecânico</h3>
            <p>Digitação precisa e durável.</p>
            <p class="card__preco">R$ 349,00</p>
          </div>
        </article>
      </div>
    </section>

    <section aria-labelledby="titulo-contato">
      <h2 id="titulo-contato" class="secao-titulo">Fale conosco</h2>
      <form class="formulario" action="processa-contato.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" required></textarea>

        <button type="submit" class="btn">Enviar</button>
      </form>
    </section>
  </main>

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
