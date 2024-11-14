<div class="itens">
    <?php
    $id = @$_REQUEST["id"];
    $page = !empty($id) ? "Editar" : "Cadastrar";
    ?>

    <section class="page-cadastro">
        <?php if ($page == 'Cadastrar') : ?>
            <h1>Faça upload do seu arquivo</h1>
        <?php else : ?>
            <h1>Atualizar Arquivo</h1>
        <?php endif; ?>
        <form action="./" method="POST" id="formCadastro">

            <label for="file-upload">Selecione um arquivo:</label>
            <input type="file" id="file-upload" name="file-upload" required>

            <?php if ($page == 'Cadastrar') : ?>
                <input type="hidden" name="acao" value="cadastrar" />
            <?php else : ?>
                <input type="hidden" name="acao" value="editar" />
                <input type="hidden" name="id" value='' />
            <?php endif; ?>

            <?php if ($page == 'Cadastrar') : ?>
                <button type="submit">Enviar</button>
            <?php else : ?>
                <button type="submit">Editar</button>
            <?php endif; ?>
        </form>
    </section>
</div>