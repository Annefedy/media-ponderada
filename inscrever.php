<html>
    <head><title>Médias ponderadas</title></head>
<body>
    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];

    $pesoNum1 = 1;
    $pesoNum2 = 2;
    $pesoNum3 = 3;
    $pesoNum4 = 4;
    $pesoNum5 = 5;

    $prodNum1Peso1 = $num1 * 1;
    $prodNum2Peso2 = $num2 * 2;
    $prodNum3Peso3 = $num3 * 3;
    $prodNum4Peso4 = $num4 * 4;
    $prodNum5Peso5 = $num5 * 5;

    $mediapond = ($prodNum1Peso1 + $prodNum2Peso2 + $prodNum3Peso3 + $prodNum4Peso4 + $prodNum5Peso5)/ (1 + 2 + 3 + 4 + 5);
    
    echo 'A média ponderada das notas é: ' .$mediapond;

    ?>
</body>    
</html>