<?php
// Loading packages of the composer
require_once('vendor/autoload.php');
//Initialize loader the template folder
$loader = new Twig\Loader\FilesystemLoader('./templates');
//Run twig
$twig = new Twig\Environment($loader);
$twig->display("index.html.twig", ['name' => "Tymoteusz"]);
?>