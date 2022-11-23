<?php
require_once('config.php');
if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
    $user = new User($_REQUEST['login'], $_REQUEST['password']);
    if($user->login()) {
        echo "Zalogowano poprawnie użytkownika: ".$user->getName();
    } else {
        echo "Błędne dane";
    }
} else {
    $twig->display("login.html.twig");
}
?>