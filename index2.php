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
        <h1>PHP POO - Exemplo 6</h1>
<hr>
<h2>Assuntos estudados nos exemplos</h2>
<ul>
    <li>Heranças</li>
    <li>Polimorfismo</li>    
</ul>



<?php
require_once "src/Ficcao.php";

$livroFiccao = new Ficcao;
$livroFiccao->setTitulo("senhor dos Aneis");


?>
<p><?=$livroFiccao->getTitulo()?></p>
<p><?=$livroFiccao->formata($livroFiccao->getTitulo() )?></p>



        <script src="" async defer></script>
    </body>
</html>