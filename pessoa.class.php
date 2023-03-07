<?php
//classe com nome pessoa
class Pessoa{
    //objetos com visibilidade privada
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //metedo de captura de valor de objeto
    public function getNome(){
        return $this->nome;
    }
    //metodo de alteração de objeto
    public function setNome($nome){
        $this->nome = $nome;
    }
    //metedo de captura de valor de objeto
    public function getEndereco(){
      return $this->endereco;
    } 
    //metodo de alteração de objeto
    public function setEndereco($endereco){
    $this->endereco = $endereco;
    }
    //metedo de captura de valor de objeto
    public function getBairro(){
        return $this->bairro;
    }
    //metodo de alteração de objeto
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    //metedo de captura de valor de objeto
    public function getCep(){
       return $this->cep;   
    }
    //metodo de alteração de objeto
    public function setCep($cep){
       $this->cep= $cep;
    }
    //metedo de captura de valor de objeto
    public function getCidade(){
      return $this->cidade;
    }
    //metodo de alteração de objeto
    public function setCidade($cidade){
      $this->cidade= $cidade;
    }
    //metedo de captura de valor de objeto
    public function getEstado(){
      return $this->estado;
    }
    //metodo de alteração de objeto
    public function setEstado($estado){
      $this->estado= $estado;
    }   

}
?>