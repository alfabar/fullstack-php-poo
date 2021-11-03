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
        <h1>PHP POO - Exemplo 5</h1>
<hr>
<h2>Assuntos estudados nos exemplos</h2>
<ul>
<li>Modificadores de visibilidade: public, private e protected</li>
    <li>Heranças</li>
    <li>Uso de recursos publicos e privados e protegidos</li>
    <li>Recursos gerais vindos da superclasses</li>
    <li>Recursos especificos programado nas subclasses</li>
    
</ul>


<?php 
require "src/Tecnico.php";
require "src/Ficcao.php";


$livroTecnico = new Tecnico;
$livroFiccao = new Ficcao;


$livroTecnico->setTitulo("Modelagem de dados");
$livroTecnico->setFormato("digital");

$livroFiccao->setTitulo("Harry Potter");


?>

<pre><?= var_dump($livroTecnico, $livroFiccao )?></pre>


<p><?=$livroTecnico->lerDados()?></p>




        <script src="" async defer></script>
    </body>
</html>