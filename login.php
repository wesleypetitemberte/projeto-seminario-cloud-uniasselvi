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
                <form action="./php/actions/login-action.php" method="POST" id="formCadastro">
                    <label for="nome">Usuário:</label>
                    <input type="email" name="email" />

                    <label for="nome">Senha:</label>
                    <input type="password" name="senha" />

                    <button>Entrar</button>
                </form>
            </div>
        </div>
        </div>
    </main>

    <?php include("./php/components/footer.php"); ?>
</body>

</html>