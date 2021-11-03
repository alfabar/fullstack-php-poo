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
        
        <h1>Exercicio</h1>


        <!-- EXERCÍCIO 02

-Modifique a classe Pessoa implementando nela propriedades privadas e métodos getters e setters.

-Crie um objeto no arquivo exercicio02.php e use os getters e setters para manipular os dados. Mostre os dados no HTML.

-DESAFIO: implemente na classe Pessoa um método privado que receba o e-mail e o sanitize.
 -->
<?php
require "Usuario.php";

$usuarioA = new Usuario;

$usuarioA->setNome("senhor dos aneis");
$usuarioA->setEmail("alfa.com");
$usuarioA->setIdade(67);
?>

<ul>
    <li>
        <b><?=$usuarioA->nome?></b>
    </li>
    <li>
        <b><?=$usuarioA->email?></b>
    </li>
    <li>
        <b><?=$usuarioA->ano?></b>
    </li>
</ul>

<pre><?=var_dump($usuarioA)?></pre>
        <script src="" async defer></script>
    </body>
</html>