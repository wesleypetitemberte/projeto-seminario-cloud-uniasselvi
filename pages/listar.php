<section class="lista">
  <?php
  $sql = "SELECT * FROM games WHERE qtd_disponivel > 0";
  $resposta = $conn->query($sql);

  if ($resposta && $resposta->num_rows > 0) :
    while ($linha = $resposta->fetch_object()) { 
      $link = "location.href='?page=games-action&acao=alugar&id=" . $linha->id;
      ?>
      <div class='card' style='--clr:#ff0;'>
        <img width="240px" src='<?php echo $linha->imagem; ?>' alt="<?php echo $linha->nome; ?>">
        <h3><?php echo $linha->nome; ?></h3>
        <p>Gênero: <?php echo $linha->genero; ?></p>
        <p>Plataforma: <?php echo $linha->plataforma; ?></p>
        <p>Preço: <?php echo $linha->preco; ?></p>
        <p>Qtd. Disponível: <?php echo $linha->qtd_disponivel; ?></p>
        <button class="botaoalugar" onclick="<?php echo $link; ?>"><strong>ALUGAR</strong></button>
      </div>

    <?php }; ?>
  <?php else : ?> 
    <p>Nenhum game encontrado!</p>
  <?php endif; ?>
</section>