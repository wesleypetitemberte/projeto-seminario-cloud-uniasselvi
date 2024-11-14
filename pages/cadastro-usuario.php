<div class="itens">
  <section class="page-cadastro">
    <h1>Novo usuário</h1>
    <form action="./?page=usuario-action" method="POST" id="formCadastro">
      <input type="hidden" name="acao" value="cadastrar" />

      <label for="nome">Nome:</label>
      <input type="text" name="nome" placeholder="Digite seu nome" required/>

      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="Digite seu email" required/>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" placeholder="Digite sua senha" required/>

      <button type="submit">Salvar</button>
    </form>
  </section>
</div>