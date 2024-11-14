<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Dragon Drive - Armazenamento de dado em nuvem</title>
</head>

<body>

    <?php include("./php/components/header.php"); ?>

    <main>

        <div class="itens">
            <div class="container">
                <?php
                    if (empty($_SESSION)) {
                        include("./pages/cadastro-usuario.php");
                    } else if (!empty($_SESSION) && $_REQUEST["page"] == "meus-arquivos") {
                        include("./pages/meus-arquivos.php");
                    } else {
                        include("./login.php");
                    }
                ?>
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