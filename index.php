<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./pages/css/style.css">
    <title>Página principal</title>
</head>
<body>

    <header>
        <nav>
            <div class="logo">
                <img src="./pages/assets/logodragao.png">
            </div>

            <div class="nomesite">
                <h1>Forja do dragão</h1>
            </div>
            
            <div class="botaologin">
                <a href="./pages/cadastro.php">LOGIN</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="itens">
            <div class="container">
                <div class="card" style="--clr:#0fff;"></div>
                <div class="card" style="--clr:#ff0;"></div>
                <div class="card" style="--clr:#ffa500;"></div>
            </div>
            <script>
                let cards = document.querySelectorAll('.card');
                cards.forEach(card => {
                card.onmousemove = function(e){
                let x = e.pageX - card.offsetLeft;
                let y = e.pageY - card.offsetTop;

                card.style.setProperty('--x', x +'px');
                card.style.setProperty('--y', y +'px');
                }})
            </script>
        </div>
    </main>

    <footer>
        
    </footer>
    
</body>
</html>