<?php

class Livro {
/* Propriedades ou atributos  */
public $titulo;
public $autor;
public $edicao;
public $ano;

/* Metodo "magico" construtor */
public function __construct() {
echo "costruir executando";
}
/* Metodo "magico" destrutor */
public function __destruct() {
    echo "destruct executado... ";
}

}














