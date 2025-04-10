<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <p></p>
    </div>


</body>
</html>

<?php

include 'Controller/CarroController.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) {
    case '/':
        echo "Pagina inicial - 🚗";
        break;

    case '/Carro':
        echo "Listar Carros - 🏎️";
        CarroController::index();
        break;

    case '/Carro/form':
        CarroController::form();
        break;

    case '/Carro/form/save':
        CarroController::save();
        break;

    case '/Carro/delete':
        CarroController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}
