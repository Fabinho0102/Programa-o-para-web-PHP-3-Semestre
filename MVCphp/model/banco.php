<?php

require_once ("init.php");
class banco{
protected $mysqli;

public function __construct()
{
    echo "Conexão efetuada com sucesso";
    $this->conexao();
}

private function conexao(){
    $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
}


}




?>