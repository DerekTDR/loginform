<?php
require_once('config.php');
if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
    $user = new User($_REQUEST['login'], $_REQUEST['password']);
    if($user->login()) {
        $message = "Zalogowano poprawnie użytkownika: ".$user->getName();
    } else {
        $twig->display("message.html.twig", ['message' => "Błędne dane logowania"]);
    }
} else {
    $twig->display("login.html.twig");
}
?>