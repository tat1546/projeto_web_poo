<?php
//importação
require_once("pessoa.class.php");
//nome classe
class Teste{
    //objeto com visibilidade privada
    private $pessoa;
    //
    public function __construct(){
        //objeto cahmado  pessoa que recebe a classe pessoa()
        $pessoa = new Pessoa();

        //passar um valor para o metodo setnome
        $pessoa->setNome($_POST['nome']);
         //imprimir um valor do metodo getnome
        echo $pessoa->getNome();
        //passar um valor para o metodo setEndereco
        $pessoa->setEndereco($_POST['endereco']."<br><br>");
         //imprimir um valor do metodo getEndereco
        echo $pessoa->getEndereco();
        //passar um valor para o metodo setBairro
        $pessoa->setBairro($_POST['bairro']."<br><br>");
         //imprimir um valor do metodo getBairro
        echo $pessoa->getBairro();
        //passar um valor para o metodo setCep
        $pessoa->setCep($_POST['cep']."<br><br>");
         //imprimir um valor do metodo getCep
        echo $pessoa->getCep();
        //passar um valor para o metodo setCidade
        $pessoa->setCidade($_POST['cidade']."<br><br>");
         //imprimir um valor do metodo getCidade
        echo $pessoa->getCidade();
        //passar um valor para o metodo setEstado
        $pessoa->setEstado($_POST['estado']."<br><br>");
         //imprimir um valor do metodo getEstado
        echo $pessoa->getEstado();


    }
//instancia
}new Teste();
?>