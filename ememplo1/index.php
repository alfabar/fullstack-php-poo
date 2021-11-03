<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>PHP POO - Exemplo 1</h1>
<hr>
<h2>Assuntos estudados nos exemplos</h2>
<ul>
    <li>Criação de classe</li>
    <li>Importação do arquivo de classe</li>
    <li>Criação de objetos (instâncias)</li>
    <li>Definição de métodos construtor e destrutor</li>
</ul>

<?php
// Importando a classe
require "src/Livro.php";


// Instanciando a partir da classe livro

$livroA = new Livro;
$livroB = new Livro;
$livroC = new Livro;



?>
<pre><?=var_dump($livroA)?> </pre>
<pre><?=var_dump($livroB)?> </pre>
<pre><?=var_dump($livroC)?> </pre>

        <script src="" async defer></script>
    </body>
</html>