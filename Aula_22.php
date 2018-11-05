<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ambiente para estudo PHP - eXcript</title>

</head>
    <?php
        if (isset($_POST["valor1"])) {
            echo $_POST["valor1"];
        }
    ?>




<body>
    <form method="POST">
        <input type="text" name="valor1"/>
         <input type="submit"/>
    </form>
</body>
</html>