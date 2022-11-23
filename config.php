<?php
// Load this first
// Load stuff from the Composer
require_once('vendor/autoload.php');
// Load classes
require_once('class/User.class.php');
// Connect to DB
$db = new mysqli('localhost', 'root', '', 'loginform');
// Load Twig
$loader = new Twig\Loader\FilesystemLoader('./templates');
// Load
$twig = new Twig\Environment($loader);
?>