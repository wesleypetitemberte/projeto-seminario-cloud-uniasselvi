<?php
/** Arquivo de configuração do banco de dados */
include("./php/config.php");
?>

<header>
    <nav>
        <div class="logo">
            <img src="./assets/logodragao.png">
        </div>

        <div class="nomesite">
            <h3>Dragon Drive</h3>
        </div>

        <ul class="main-menu">
            <li>
                <a class="botao-menu" href="./?">Home</a>
            </li>
            <?php if (empty($_SESSION)) : ?>
                <li>
                    <a class="botao-menu" href="./?page=novo-usuario">Cadastro</a>
                </li>
                <li>
                    <a class="botao-menu" href="./login.php">Login</a>
                </li>
            <?php else : ?>
                <li>
                    <a class="botao-menu" href="./logout.php">Sair</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>