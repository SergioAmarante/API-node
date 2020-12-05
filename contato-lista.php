<?php

require "./Models/Contato.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON

$contato = Contato::getAll();

echo json_encode($contato);
