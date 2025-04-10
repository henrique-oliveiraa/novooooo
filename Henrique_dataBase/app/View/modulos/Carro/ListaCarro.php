<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
</head>

<body>
    <table>
        <tr>
            <th>Excluir</th>
            <th>ID</th>
            <th>Marca</th>
            <th>Nome</th>
            <th>Quilometros</th>
            <th>Ano</th>
        </tr>
        <?php foreach ($model->rows as $item): ?>
            <tr>
                <td><a href="/Carro/delete?id=<?= $item->id ?>">❌</a></td>
                <td><?= $item->id ?></td>
                <td><a href="/Carro/form?id=<?= $item->id ?>"><?= $item->Marca ?></a></td>
                <td><?= $item->nomeCarro ?></td>
                <td><?= $item->Quilometros ?></td>
                <td><?= $item->Ano ?></td>

            </tr>

        <?php endforeach ?>

    </table>
</body>

</html>