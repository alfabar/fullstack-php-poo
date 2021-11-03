<?php

class Livro {

private string $titulo;
private string $autor;
private int $ano;
protected string $formato;


public function setFormato(string $formato){
    $this->formato = $formato;
}


public function getFormato():string{
    return $this->formato;
}

//getters
public function getTitulo():string {

return $this->titulo;
}
public function getAutor():string {
    return $this->autor;
}
public function getAno():int {
    return $this->ano;
}

// Setters
public function setTitulo(string $titulo){
    $this->titulo = $titulo;
}

public function setAutor(string $autor){
    $this->autor = $autor;
}

public function setAno(int $ano){
    $this->ano = $ano;
}

}
