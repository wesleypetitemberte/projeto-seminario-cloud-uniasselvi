<?php

/**
 * Página para controlar as ações do CRUD dos games
 */
switch ($_REQUEST["acao"]) {
  case "cadastrar":
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $plataforma = $_POST["plataforma"];
    $imagem = $_POST["imagem"];
    $preco = $_POST["preco"];
    $qtd_disponivel = $_POST["qtd_disponivel"];

    validarUsuario("ADMIN");

    $sql = "INSERT INTO games (nome, genero, imagem, plataforma, preco, qtd_disponivel) VALUES ('{$nome}', '{$genero}', '{$imagem}', '{$plataforma}', {$preco}, {$qtd_disponivel})";

    $resposta = $conn->query($sql);

    if ($resposta == true) {
      echo "<script>alert('Game cadastrado com sucesso!')</script>";
      echo "<script>location.href = '?'</script>";
    } else {
      echo "<script>alert('Não foi possível cadastrar o game!')</script>";
      echo "<script>location.href = '?page=novo'</script>";
    }
    break;
  case "editar":
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $plataforma = $_POST["plataforma"];
    $imagem = $_POST["imagem"];
    $preco = $_POST["preco"];
    $qtd_disponivel = $_POST["qtd_disponivel"];

    validarId($id);
    validarUsuario("ADMIN");

    $sql = "UPDATE games SET nome='{$nome}', genero='{$genero}', plataforma='{$plataforma}', imagem='{$imagem}', preco={$preco}, qtd_disponivel={$qtd_disponivel} WHERE id={$id}";

    $resposta = $conn->query($sql);

    if ($resposta == true) {
      echo "<script>alert('Game atualizado com sucesso!')</script>";
      echo "<script>location.href = '?'</script>";
    } else {
      echo "<script>alert('Não foi possível atualizar o game!')</script>";
      echo "<script>location.href = '?page=novo&id={$id}'</script>";
    }

    break;
  case "excluir":
    $id = $_REQUEST["id"];

    validarId($id);
    validarUsuario("ADMIN");

    $sql = "SELECT * FROM aluguel_game WHERE game_id={$id}";

    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
      echo "<script>alert('Não é possível excluir o game, pois ele está alugado!')</script>";
      echo "<script>location.href = '?'</script>";
      exit;
    }

    $sql = "DELETE FROM games WHERE id={$id}";

    $resposta = $conn->query($sql);

    if ($resposta == true) {
      echo "<script>alert('Game excluído com sucesso!')</script>";
      echo "<script>location.href = '?'</script>";
    } else {
      echo "<script>alert('Não foi possível excluir o game!')</script>";
      echo "<script>location.href = '?'</script>";
    }
    break;
  case "alugar":
    $id = $_REQUEST["id"];
    $id_usuario = $_SESSION["id_usuario"];

    validarId($id);
    validarUsuario("CLIENTE");

    $sql = "SELECT * FROM aluguel_game WHERE usuario_id={$id_usuario} AND game_id={$id}";

    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
      echo "<script>alert('Você já alugou este game!')</script>";
      echo "<script>location.href = '?'</script>";
      exit;
    }

    $sql = "UPDATE games SET qtd_disponivel = qtd_disponivel - 1 WHERE id={$id}";

    $res = $conn->query($sql);

    if ($res == false) {
      echo "<script>alert('Não foi possível alugar o game!')</script>";
      echo "<script>location.href = '?'</script>";
      exit;
    }

    $sql = "INSERT INTO aluguel_game (usuario_id, game_id) VALUES ({$id_usuario}, {$id})";

    $resposta = $conn->query($sql);

    if ($resposta == true) {
      echo "<script>alert('Game alugado com sucesso!')</script>";
      echo "<script>location.href = '?'</script>";
    } else {
      echo "<script>alert('Não foi possível alugar o game!')</script>";
      echo "<script>location.href = '?'</script>";
    }
    break;
  case "devolver":
    $id = $_REQUEST["id"];
    $id_usuario = $_SESSION["id_usuario"];

    validarId($id);
    validarUsuario("CLIENTE");

    $sql = "DELETE FROM aluguel_game WHERE usuario_id={$id_usuario} AND game_id={$id}";

    $res = $conn->query($sql);

    $sql = "UPDATE games SET qtd_disponivel = qtd_disponivel + 1 WHERE id={$id}";

    $res = $conn->query($sql);

    if ($res == true) {
      echo "<script>alert('Game devolvido com sucesso!')</script>";
      echo "<script>location.href = '?page=meus-games'</script>";
    } else {
      echo "<script>alert('Não foi possível devolver o game!')</script>";
      echo "<script>location.href = '?page=meus-games'</script>";
    }
    break;
  default:
    break;
}
