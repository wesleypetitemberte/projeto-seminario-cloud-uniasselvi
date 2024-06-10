<div class="itens">
    <form action="?page=games-action" method="POST">
        <input type="hidden" name="acao" value="cadastrar" />
        <label for="nome">Nome do Game:</label>
        <input type="text" name="nome" />
        <label for="genero">Gênero</label>
        <input type="text" name="genero" />
        <label for="plataforma">Plataforma</label>
        <input type="text" name="plataforma" />
        <label for="preco">Preço</label>
        <input type="number" name="preco" />
        <button type="submit">Cadastrar</button>
    </form>
</div>