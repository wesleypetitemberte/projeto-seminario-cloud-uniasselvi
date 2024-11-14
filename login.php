<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Login</title>
</head>

<body>
    <?php include("./php/components/header.php"); ?>

    <main>
        <div class="itens">
            <div class="container">
                <section class="page-cadastro">
                    <h1>Acesso ao sistema</h1>

                    <form action="./php/actions/login-action.php" method="POST" id="formCadastro">
                        <label for="nome">Usuário:</label>
                        <input type="email" name="email" placeholder="Digite seu email" required/>

                        <label for="nome">Senha:</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" required/>

                        <button>Entrar</button>
                    </form>

                    <a href="./?page=novo-usuario">Não possui conta ainda? Crie sua conta aqui!</a>
                </section>
            </div>
        </div>
        </div>
    </main>

    <?php include("./php/components/footer.php"); ?>
</body>

</html>