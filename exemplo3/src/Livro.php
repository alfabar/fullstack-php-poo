<?php

class Livro {
/* Propriedades ou atributos  */
public string $titulo;
public string $autor;
public int $edicao;
public $ano;

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

}
