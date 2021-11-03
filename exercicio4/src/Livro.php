<?php

class Livro {
/* Modificadores de propriedades 

public, -> acesso ppossivel na classe , nas sub classes e fora delas
private, -> acesso possivel somente na propria classe em que foram declarados
protected -> acesso possivel na prépria classe e nas sub-classes

*/
private string $titulo;
private string $autor;
private int $ano;

/* Metodo "magico" construtor */
public function __construct() {

/* Atribuindo valores recebidos as propriedades das classes */
$this->titulo = "sem titulo";
$this->autor = "sem autor";
$this->ano = 0;


}
// Método
public function exibirDados(){

echo " <p> $this->titulo </p>";
echo " <p> $this->autor </p>";
echo " <p> $this->ano </p>";

}


/*  Métodos publicos getters e setters 
get -> pegar/obter/ler
set -> inserir /definir/colocar/setar */




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
