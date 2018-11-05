


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 24 ElseIF</title>

</head>
<?php
if (isset($_POST['idade'])){
    $idade = $_POST['idade'];

        if($idade < 18 ){
            echo "A idade é de um adolecente";
        }elseif($idade >= 18 and $idade <60){
            echo "A idade é de um aldulto";
        }else{
           echo "A idade é de uma pessoa da terceira idade";
        }

}
?>




<body>
<form method="POST">
    <input type="text" name="idade"/>
    <input type="submit"/>
</form>
</body>
</html>