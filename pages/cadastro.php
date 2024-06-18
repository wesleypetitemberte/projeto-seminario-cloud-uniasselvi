<div class="itens">
    <section class="page-cadastro">
        <h1>CADASTRO</h1>
        <form action="./?page=games-action" method="POST" id="formCadastro">
            <input type="hidden" name="acao" value="cadastrar"/>

            <label for="nome">Nome do Game</label>
            <input type="text" name="nome" placeholder="Digite o nome"/>

            <label for="genero">Gênero</label>
            <input type="text" name="genero" placeholder="Digite o genêro"/>

            <label for="plataforma">Plataforma</label>
            <input type="text" name="plataforma" placeholder="Digite a plataforma"/>

            <label for="plataforma">Imagem</label>
            <input type="text" name="imagem" placeholder="Digite o link do imagem"/>

            <label for="preco">Preço</label>
            <input type="number" name="preco" placeholder="Digite o preço"/>
            
            <button type="submit">Cadastrar</button>
        </form>
    </section>
</div>