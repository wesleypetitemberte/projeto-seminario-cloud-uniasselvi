<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Forja do Dragão - Locadora de Games</title>
    </head>

    <body>

    <?php include("./php/components/header.php"); ?>

        <main>
            
            <div class="itens">
                    <div class="container">
                        <?php
                        switch (@$_REQUEST["page"]) {
                            /**
                         * Todas as páginas devem ser criadas dentro da pasta pages
                         * e deve ser feito o include aqui criando um novo case
                         */
                        case "novo":
                            include("./pages/cadastro.php");
                            break;
                        case "novo-usuario":
                            include("./pages/cadastro-usuario.php");
                            break;
                        case "meus-games":
                            include("./pages/meus-games.php");
                            break;
                        case "games-action":
                            include("./php/actions/games-action.php");
                            break;
                        case "usuario-action":
                            include("./php/actions/usuario-action.php");
                            break;
                        default:
                            include("./pages/listar.php");
                            break;
                        }
                        ?>
                        <div class="listabotoes">
                            <button class="button">Adicionar</button>
                            <button class="button">Excluir</button>
                            <button class="button">Editar</button>
                        </div>
                </div>
            </div>            
            
        </main>

        <?php include("./php/components/footer.php"); ?>

        <script>
            let cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.onmousemove = function(e) {
                    let x = e.pageX - card.offsetLeft;
                    let y = e.pageY - card.offsetTop;

                    card.style.setProperty('--x', x + 'px');
                    card.style.setProperty('--y', y + 'px');
                }
            })
        </script>
    </body>

</html>