<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "admin24");
define("DB", "dragondrive");

$conn = new mysqli(HOST, USER, PASS, DB);

// Verifica a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();

function validarUsuario($tipo_usuario, $id_usuario = '')
{
  if (empty($id_usuario)) {
    $id_usuario = $_REQUEST["id"];
  }

  if (empty($_SESSION) && empty($id_usuario)) {
    echo "<script>alert('Você precisa estar logado para acessar o sistema!')</script>";
    echo "<script>location.href = '?page=login'</script>";
    exit;
  }
  if ($_SESSION["tipo_usuario"] != $tipo_usuario) {
    echo "<script>alert('Você não tem permissão para executar essa ação!')</script>";
    echo "<script>location.href = '?page=meus-arquivos'</script>";
    exit;
  }
}


function validarId($id)
{
  if (empty($id)) {
    echo "<script>alert('Game não encontrado!')</script>";
    echo "<script>location.href = '?page=meus-arquivos'</script>";
    exit;
  }
}
