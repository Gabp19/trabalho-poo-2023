<?php

class Servico
{ 
    private $nome;
    private $tempo;
    private $valor;
    private $logo;


    /* Metodo construtor da classe. e executado ao instanciar um objeto */ 
    public function __consruct ($nome,$tempo,$valor,$logo)
    {
        $this->nome = $nome;
        $this->tempo = $tempo;
        $this->valor = $valor;
        $this->logo = $logo;
        

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
    
    // tempo
    public function getTempo ()
    {
        return $this->tempo;
    }

    public function setTempo ($tempo)
    {
         $this->tempo = $tempo;
    }

    //valor
    public function getValor ()
    {
        return $this->valor;
    }

    public function setValor ($valor)
    {
         $this->valor = $valor;
    }

    //logo
    public function getLogo ()
    {
        return $this->logo;
    }

    public function setLogo ($logo)
    {
         $this->logo = $logo;
    }

    //método pra cadastrar um serviço
    public function cadastrar ()
    {
         
    }

    //método pra atualizar um serviço
    public function atualizar ()
    {
         
    }

    //método pra apagar um serviço
    public function apagar ()
    {
         
    }
}


?>