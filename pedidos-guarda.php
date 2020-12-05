<?php

require "./Models/Pedidos.php";

$pedido = new Contato;
$pedido->nome = $_POST['nome'];
$pedido->mensagem = $_POST['mensagem'];

$validate = $contato->registerContato();

if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}
