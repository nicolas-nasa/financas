<?php

class Movimentacao {

    private $db = "mysql:dbname=financeiro;host=localhost";
    private $dbuser = "root";
    private $dbpass = "";
    public function __construct()
    {
        $this->pdo = new PDO ($this->db,$this->dbuser,$this->dbpass);
    }

    //create
    public function nova($titulo, $descricao, $valor, $tipo ){
            $sql = "INSERT INTO movimentacao (titulo, descricao, valor, data, tipo) VALUES (:titulo, :descricao, :valor, NOW(), :tipo)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':titulo',$titulo);
            $sql->bindValue(':descricao',$descricao);
            $sql->bindValue(':valor',$valor);
            $sql->bindValue(':tipo',$tipo);
            $sql->execute();
            echo "okay adc</br>";
    }
    //read
    public function listar (){
        $sql = "SELECT * FROM movimentacao";
        $sql = $this->pdo->query($sql);
        echo "okay getall</br>";
        return $sql->fetchAll();

    }
    //update
    //delete




}