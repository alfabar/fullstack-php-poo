<?php

class Livro {
/* Propriedades ou atributos  */
public string $titulo;
public string $autor;
public int $edicao;
public $ano;

/* Metodo "magico" construtor */
public function __construct( string $titulo, string $autor, int $ano ) {

/* Atribuindo valores recebidos as propriedades das classes */
$this->titulo = $titulo;
$this->autor = $autor;
$this->ano = $ano;


}


}














