<section class="lista">
  <?php
  $sql = $conn->prepare("SELECT * FROM games WHERE qtd_disponivel > 0");
  $sql->execute();
  $resposta = $sql->get_result();

  if ($resposta && $resposta->num_rows > 0) :
    while ($linha = $resposta->fetch_object()) {
      $linkAlugar = "location.href='?page=games-action&acao=alugar&id=" . $linha->id . "'";
      $linkEditar = "location.href='?page=games-action&acao=editar&id=" . $linha->id . "'";
      $linkExcluir = "location.href='?page=games-action&acao=excluir&id=" . $linha->id . "'";
  ?>
      <div class='card' style='--clr:#ff0;'>
        <img width="240px" src='<?php echo $linha->imagem; ?>' alt="<?php echo $linha->nome; ?>">
        <h3><?php echo $linha->nome; ?></h3>
        <p>Gênero: <?php echo $linha->genero; ?></p>
        <p>Plataforma: <?php echo $linha->plataforma; ?></p>
        <p>Preço: <?php echo $linha->preco; ?></p>
        <p>Qtd. Disponível: <?php echo $linha->qtd_disponivel; ?></p>
        <?php if (!empty($_SESSION) && $_SESSION["tipo_usuario"] == 'CLIENTE') : ?>
          <button class="botaoalugar" onclick="<?php echo $linkAlugar; ?>"><strong>ALUGAR</strong></button>
        <?php endif; ?>
        <?php if (!empty($_SESSION) && $_SESSION["tipo_usuario"] == 'ADMIN') : ?>
          <div class="listabotoes">
            <!-- <button class="button">Adicionar</button> -->
            <button class="button" onclick="<?php echo $linkEditar; ?>">Excluir</button>
            <button class="button" onclick="<?php echo $linkExcluir; ?>">Editar</button>
          </div>
        <?php endif; ?>
      </div>

    <?php }; ?>
  <?php else : ?>
    <p>Nenhum game encontrado!</p>
  <?php endif; ?>
</section>