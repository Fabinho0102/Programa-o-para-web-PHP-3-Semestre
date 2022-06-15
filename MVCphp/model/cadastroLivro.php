<?php
require_once("banco.php");

class cadastro extends banco {

    private $nome;
    private $autor;
    private $quantidade;
    private $preco;
    private $Flag;
    private $data;

    public function setNome($String){
        $this->nome = $String;

    }
    public function setAutor($String){
        $this->autor = $String;
    }

    public function setQuantidade($String){
        $this->quantidade = $String;

    }

    public function setPreco($String){
        $this->preco = $String;
        
    }
    public function setFlag($String){
        $this->Flag = $String;
    }

    public function setData($String){
        $this->data = $String;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getFlag(){
        return $this->Flag;
    }
    public function getData(){
        return $this->data;
    }
    

    public function incluir(){
        return $this->setLivro($this->getNome(),$this->getAutor(),$this->getQuantidade(),$this->getPreco(),$this->getData());
    }
}
?>





