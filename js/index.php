<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caculadora</title>
</head>
<body>
    <form action="backend.php" method="post">
        <input type= "text" name="campo_nome"> <br><br>
        <input type="text" name="campo_sobrenome"><br><br>
        <input type="submit" name="botao_enviar" value="Enviar">
    </form>

    <form action="calculadora.php" method="post">
        <br>
        <input type="number" name="n1"> <br><br>
        <input type="number" name="n2"> <br><br>
        <input type="text" name="sinal"> <br><br>
        <input type="submit" name="botao_calcular" valur="Calcular">

    </form>

    <br><br>

    <?php
    if(isset($_GET['mostrar'])){
    echo 'Resultado da conta é: ' . $_GET['mostrar'];
    }
    ?>
</body>
</html>