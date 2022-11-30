<?php
use Steampixel\Route;
require_once('config.php');
require_once('class/User.class.php');
Route::add('/login', function () {
    global $twig;
    $twig->display('login.html.twig');
});


Route::add('/login', function () {
    global $twig;
    if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
        $user = new User($_REQUEST['login'], $_REQUEST['password']);

        if($user->login()) {
            $_SESSION['authorized'] = true;
            $_SESSION['user'] = $user;
            $v = array(
            'message' => "Zalogowano poprawnie użytkownika: ".$user->getName(),
            'authorized' => $_SESSION['authorized'],
            );
            $twig->display('message.html.twig', $v);
        } else {
            $twig->display("message.html.twig", ['message' => "Błędne dane logowania"]);
        }
    } else {
        $twig->display("login.html.twig");
    }
}, 'post');


Route::run('/loginform');
?>