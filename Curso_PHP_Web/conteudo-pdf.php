<?php

require "src/conexao.php";
require "src/Model/Produtos.php";
require "src/Repository/ProdutoRepositorio.php";

$produtosRepositorio = new ProdutoRepositorio($pdo);
$produtos = $produtosRepositorio->buscarTodos();

?>

<style>
    table {
        width: 90%;
        margin: auto 0;
    }

    table,
    th,
    td {
        border: 1px solid #000;
    }

    table th {
        padding: 11px 0 11px;
        font-weight: bold;
        font-size: 18px;
        text-align: left;
        padding: 8px;
    }

    table tr {
        border: 1px solid #000;
    }

    table td {
        font-size: 18px;
        padding: 8px;
    }

    .container-admin-banner h1 {
        margin-top: 40px;
        font-size: 30px;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Produto</th>
            <th>Descricão</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto->getTipo() ?></td>
            <td><?= $produto->getNome() ?></td>
            <td><?= $produto->getDescricao() ?></td>
            <td><?= $produto->getPrecoFormatado() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>