<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['login']) && isset($_REQUEST['passwd'])) {
            $db = new mysqli('localhost', 'root', '', 'loginform');
            require('./../class/User.class.php');
            $user = new User($_REQUEST['login'], $_REQUEST['passwd']);
            $user->login();
            if($user->isAuth()) {
                echo "Zalogowano poprawnie";
            }
            else {
                echo "Błąd logowania";
            }
        }
    ?>
    <style>
        #loginform {
            width: 50vw;
            margin: 10vh 25vw;
        }
        #loginform > form > *{
            display: block;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
    <div id="loginform">
        <form action="" method="post">
            <label for="loginID">Nazwa użytkownika:</label><br />
            <input type="text" name="login" id="loginID"><br />
            <label for="passwdID" name="passwd" id="passwdID"><br />
            <input type="passwd" name="passwd" id="passwdID"><br />
            <input type="submit" value="Zaloguj">
        </form>
    </div>
</body>
</html>