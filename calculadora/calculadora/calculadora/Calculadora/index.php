<?php
    $n1 = 0;
    $n2 = 0;
    $resultado = 0;
    $calcular = 'soma';
    if(isset($_GET['n1'], $_GET['n2'], $_GET['calcular'])){
        $num1 = $_GET['n1'];
        $num2 = $_GET['n2'];
        $calcular = $_GET['calcular'];

        switch($calcular){
            case 'soma':
                $resultado = $n1 + $n2;
                break;
            case 'sub':
                $resultado = $n1 - $n2;
                break;
            case 'mul':
                $resultado = $n1 * $n2;
                break;
            case 'div':
                $resultado = $n1 / $n2;
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form>
        Primeiro Número <br>
        <input type="number" name="n1"><br>
        Segundo Número <br>
        <input type="number" name="n2" style="border-"><br><br>
        <select name="calcular">
            <option value="soma">Somar</option>
            <option value="sub">Subtrair</option>
            <option value="mul">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
        <input type="submit" value="calcular">
        <br><br>
        <p>O resultado é <?= $resultado ?></p>
    </form>
</body>
</html>