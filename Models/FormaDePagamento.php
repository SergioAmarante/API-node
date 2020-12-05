<?php

require "Connection.php";

class Contato
{
    public $nome;
    public $email;
    public $comentario;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM contato");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerComentario()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO contato (nome, email, comentario) values ('$this->nome','$this->email','$this->comentario')");
        
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
