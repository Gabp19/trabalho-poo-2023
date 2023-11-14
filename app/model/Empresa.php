<?php

class Empresa
{ 
    private $nome;
    private $cnpj;
    private $endereco;
    private $telefone;


    /* Metodo construtor da classe. e executado ao instanciar um objeto */ 
    public function __consruct ($nome,$cnpj,$endereco,$telefone)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        

    }

    // nome 
    public function getNome ()
    {
        return $this->nome;
    }

    
    public function setNome ($nome)
    {
        $this->nome = $nome;
    }
    
    // cnpj
    public function getCnpj ()
    {
        return $this->cnpj;
    }

    public function setCnpj ($cnpj)
    {
         $this->cnpj = $cnpj;
    }

    //endereço
    public function getEndereco ()
    {
        return $this->endereco;
    }

    public function setEndereco ($endereco)
    {
         $this->endereco = $endereco;
    }

    //telefone
    public function getTelefone ()
    {
        return $this->telefone;
    }

    public function setTelefone ($telefone)
    {
         $this->telefone = $telefone;
    }

    //método pra cadastrar uma empresa
    public function cadastrar ()
    {
         
    }

    //método pra atualizar uma empresa
    public function atualizar ()
    {
         
    }

    //método pra apagar uma empresa
    public function apagar ()
    {
         
    }
}


?>