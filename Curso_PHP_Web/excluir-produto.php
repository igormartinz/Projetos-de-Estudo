<?php

require "src/conexao.php";
require "src/Model/Produtos.php";
require "src/Repository/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST['id']);

header('Location: admin.php');
?>