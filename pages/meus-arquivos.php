<section class="lista">
  <?php
  $sql = "SELECT g.id, g.nome, g.preco, g.genero, g.plataforma, g.imagem FROM games as g JOIN aluguel_game as ag ON g.id = ag.game_id WHERE ag.usuario_id = {$_SESSION["id_usuario"]}";
  $resposta = $conn->query($sql);

  if ($resposta && $resposta->num_rows > 0) :
    while ($linha = $resposta->fetch_object()) {
      $link = "location.href='?page=games-action&acao=devolver&id=" . $linha->id . "'";
  ?>
      <div class='card' style='--clr:#0fff;'>
        <img width="240px" src='<?php echo $linha->imagem; ?>' alt="<?php echo $linha->nome; ?>">
        <h3><?php echo $linha->nome; ?></h3>
        <p class='card-item'>Gênero: <?php echo $linha->genero; ?></p>
        <p class='card-item'>Plataforma: <?php echo $linha->plataforma; ?></p>
        <p class='card-item'>Preço: <?php echo $linha->preco; ?></p>
        <button class="botaoalugar" onclick="<?php echo $link; ?>"><strong>DEVOLVER</strong></button>
      </div>
    <?php }; ?>
  <?php else : ?>
    <section class="page-cadastro" style="width: 960px;">
      <h1>Nenhum game encontrado!</h1>
    </section>
  <?php endif; ?>
</section>