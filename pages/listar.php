<?php
  $sql = "SELECT * FROM games";
  $resposta = $conn->query($sql);

  $qtd = $resposta->num_rows;

  if($qtd > 0){
    while($linha = $resposta->fetch_object()){
      echo <<<HTML
        <div class='card' style='--clr:#0fff;'> 
          <h3>$linha->nome</h3>
          <p>Gênero: $linha->genero</p>
          <p>Plataforma: $linha->plataforma</p>
          <p>Preco: $linha->preco</p>
        </div>
        HTML;
    }
  } else {
    echo "<p>Nenhum dado encontrado!</p>";
  }