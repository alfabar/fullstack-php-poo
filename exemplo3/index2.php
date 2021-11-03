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
        <h1>PHP POO - Exemplo 2</h1>
<hr>
<h2>Assuntos estudados nos exemplos</h2>
<ul>
<li>Atribuição direta ao valore propriedade publicas</li>
    <li>Criação de classe</li>
    <li>Importação do arquivo de classe</li>
    <li>Leitura usando método publico</li>
    <li>Leitura direta das propriedades publicas</li>
</ul>

<?php
// Importando a classe
require "src/Livro.php";


// Instanciando a partir da classe livro

$livroA = new Livro;
$livroB = new Livro;

$livroA->titulo = " Senhor dos aneis";
$livroA->autor = "aneis";
$livroA->ano = 1954;


?>
<pre><?=var_dump($livroA, $livroB)?></pre>


<!-- Acesso direto aos dados do objeto -->

<h1>Acesso direto aos dados do objeto</h1>

<h3>saida</h3>

<ul>
    <li>
        <b><?=$livroA->titulo?></b>
    </li>
    <li>
        <b><?=$livroA->autor?></b>
    </li>
    <li>
        <b><?=$livroA->ano?></b>
    </li>
</ul>


<?php
$livroB->titulo = "Ghost Rider";
$livroB->autor = "Rider";
$livroB->ano = 90;

?>

<h3>Acesso aos dados do objeto através de um tétodo</h3>

<div>
<?= $livroB->exibirDados() ?>

</div>






        <script src="" async defer></script>
    </body>
</html>