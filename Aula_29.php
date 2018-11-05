<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Tela de login e senha</title>

        </head>
            <body>
            <?php
                $login = "jeff";
                $senha = "123";

            if(isset($_POST["login"])){
                //echo $_POST["login"] . "<br>";
                //  echo $_POST["senha"] . "<br>";
            if($_POST["login"]== $login and $_POST["senha"] == $senha ){
                echo "Login efetuado com sucesso";
                }else{
                echo "Login ou senha invalido";
            }
            }
            ?>
        <form method="POST">
            <input type="text" name="login"/>
            <input type="password" name="senha"/>
            <input type="submit"/>
        </form>
            </body>
    </html>