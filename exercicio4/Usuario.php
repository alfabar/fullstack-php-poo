<?php

     class Usuario {

     private string $nome;
     private string $email; 
     private int $idade;


    public function getNome():string{
    return $this->nome;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function getIdade():Int{
        return $this->idade;
    }
    ////////////////////////
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    
    public function setEmail(string $email){
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);        
    }
    
    public function setIdade(int $idade){
        $this->idade = $idade;
    }

}
