<?php

use LDAP\Result;

require_once("../model/cadastroLivro.php");
class cadastroController{

    private $cadastro;
    public function __construct()
    {
        $this->cadastro = new cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setAutor($_POST['autor']);
        $this->cadastro->setQuantidade($_POST['quantidade']);
        $this->cadastro->setPreco($_POST['preco']);
        $this->cadastro->setData(date('y-m-d' ,strtotime($_POST['data'])));

        $result = $this->cadastro->incluir();
        if($result >= 1)
        {
            echo "<script>alert('Registro Incluido com sucesso!'); Document.Location='/view/Cadastro.php'</script>";

        }
        else
        {
            echo "<script>alert('erro ao gravar registro!, verifique se o livro nao está duplicado');history.back()</script>";
        }
        }

    }
    new cadastroController();
