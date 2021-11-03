<?php

class Usuario {

public $nome;
public $email;
public $idade;







public function getNome():string {

    return $this->nome;
    }
    public function getEmail():string {
        return $this->email;
    }
    public function getIdade():int {
        return $this->idade;
    }
    ////////////////////////
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    
    public function setEmail(string $email){
        $this->email = $email;
    }
    
    public function setIdade(int $idade){
        $this->idade = $idade;
    }
}
