<?php
    $numero_n1 = $_POST['n1'];
    $numero_n2 = $_POST['n2'];
    $sinal = $_POST['sinal'];
    
    if ($sinal == '+') 
    {

        $resultado = $numero_n1 + $numero_n2;
    } 
    if ($sinal == '-') 
    {
        $resultado = $numero_n1 - $numero_n2;
    } 
    if ($sinal == '*') 
    {
        $resultado = $numero_n1 * $numero_n2;
    } 
    if ($sinal == '/') 
    {
        $resultado = $numero_n1 / $numero_n2;
    } 

    header('Location: index.php?mostrar=' . $resultado);
    ?>