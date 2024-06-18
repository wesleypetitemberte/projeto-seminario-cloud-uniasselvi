<?php
/** Arquivo de configuração do banco de dados */
session_start();
include("./php/config.php");
?>

<header>
    <nav>
        <div class="logo">
            <img src="./assets/logodragao.png">
        </div>

        <div class="nomesite">
            <h3>Forja do Dragão Locadora de Games</h3>
        </div>

        <ul class="main-menu">
            <li>
                <a class="botao-menu" href="?">Home</a>
            </li>

            <?php if (!empty($_SESSION) && $_SESSION["tipo_usuario"] == 'ADMIN') : ?>
                <li>
                    <a class="botao-menu" href="?page=novo">Cadastrar Game</a>
                </li>

            <?php elseif(!empty($_SESSION) && $_SESSION["tipo_usuario"] == 'CLIENTE') : ?>
                <li>
                    <a class="botao-menu" href="?page=meus-games">Meus Alugueis</a>
                </li>
            <?php endif; ?>

            <?php if (empty($_SESSION)) : ?>
                <li>
                    <a class="botao-menu" href="?page=novo-usuario">Cadastro</a>
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