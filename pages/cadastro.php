<div class="itens">
    <?php
    $id = @$_REQUEST["id"];
    $page = !empty($id) ? "Editar" : "Cadastrar";

    class Game
    {
        public $id;
        public $nome;
        public $genero;
        public $plataforma;
        public $imagem;
        public $preco;
        public $qtd_disponivel;
    }

    $game = new Game();

    if ($page == 'Editar') {
        $sql = "SELECT * FROM games WHERE id={$id}";
        $resposta = $conn->query($sql);
        $game = $resposta->fetch_object();
    }
    ?>
    <section class="page-cadastro">
        <?php if ($page == 'Cadastrar') : ?>
            <h1>Cadastro Novo Game</h1>
        <?php else : ?>
            <h1>Atualizar Game</h1>
        <?php endif; ?>
        <form action="./?page=games-action" method="POST" id="formCadastro">
            <?php if ($page == 'Cadastrar') : ?>
                <input type="hidden" name="acao" value="cadastrar" />
            <?php else : ?>
                <input type="hidden" name="acao" value="editar" />
                <input type="hidden" name="id" value='<?php echo $game->id ?>' />
            <?php endif; ?>

            <label for="nome">Nome do Game</label>
            <input type="text" name="nome" placeholder="Digite o nome" value='<?php echo $game->nome ?>' />

            <label for="genero">Gênero</label>
            <input type="text" name="genero" placeholder="Digite o genêro" value='<?php echo $game->genero ?>' />

            <label for="plataforma">Plataforma</label>
            <input type="text" name="plataforma" placeholder="Digite a plataforma" value='<?php echo $game->plataforma ?>' />

            <label for="plataforma">Imagem</label>
            <input type="text" name="imagem" placeholder="Digite o link do imagem" value='<?php echo $game->imagem ?>' />

            <label for="preco">Preço</label>
            <input type="number" name="preco" placeholder="Digite o preço" value='<?php echo $game->preco ?>' />

            <label for="qtd_disponivel">Quantidade</label>
            <input type="number" name="qtd_disponivel" placeholder="Digite a quantidade" value='<?php echo $game->qtd_disponivel ?>' />
            <?php if ($page == 'Cadastrar') : ?>
                <button type="submit">Cadastrar</button>
            <?php else : ?>
                <button type="submit">Editar</button>
            <?php endif; ?>
        </form>
    </section>
</div>