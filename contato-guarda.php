<?php

require "./Models/FormaDePagamento.php";

$contato = new Contato;
$contato->nome = $_POST['nome'];
$contato->email = $_POST['email'];
$contato->comentario = $_POST['comentario'];

$validate = $contato->registerComentario();

if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}
