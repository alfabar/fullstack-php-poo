<?php

require_once "Livro.php";

class Tecnico extends Livro{
private string $area;



public function lerDados(){
    echo "<p>Titulo do livro " .$this->getTitulo()."</p>";
    echo "<p>formato disponivel " .$this->formato."</p>";
}



 

public function setArea(string $area){
    $this->area = $area;
}
public function getArea():string{
    return $this->area;
}




}