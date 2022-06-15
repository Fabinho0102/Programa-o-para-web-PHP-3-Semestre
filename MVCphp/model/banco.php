<?php

require_once ('init.php');

class banco{
    private $mysqli;

public function __construct()
{ 
    echo "Conexão efetuada com sucesso";
    $this->conexao();
}
public function query($sql){
    $this -> stmt = $this->mysqli->prepare($sql);
    }

private function conexao(){
    $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    if($this ->mysqli->connect_error){
        echo "Falha ao conectar com o banco!(".$this->mysqli->connect_error .")". $this->mysqli->connect_error;
    }
    
}

public function setLivro($nome, $autor, $quantidade, $preco, $data){
   
   $stmt = $this->mysqli->prepare("INSERT INTO livros (`nome`, `autor`, `quantidade`, `preco`, `data`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $nome, $autor, $quantidade, $preco, $data);
    if($stmt->execute() == TRUE){
        return true;
    } else {
        return false;
    }

    }
}


?>