<?php
$db = new mysqli('localhost', 'root', '', 'loginform');
$loader = new \Twig\Loader\ArrayLoader([
    'index' => "Hello {{name}}!";
]);
$twig = new \Twig\Enviroment($loader);
?>