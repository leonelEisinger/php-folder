<!-- 
 
    5) Construir uma página PHP onde seja possível ler 3 números, os possíveis
    lados de um triângulo, e mostrar a classificação (equilátero, isósceles e
    escaleno) de acordo com tamanho dos lados.

-->

 <?php 
 
    $first = @$_GET["side1"];
    $second = @$_GET["side2"];
    $third = @$_GET["side3"];

    $result = "";

    if($first == $second && $second == $third){
        $result = "Equilátero";
    }elseif($first == $second || $second == $third || $first == $third){
        $result = "Isósceles";
    }else {
        $result = "Escaleno";
    }

 ?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício triangulo</title>
 </head>
 <body>
    <form method="get">

        <label for="side1">Digite o primeiro lado</label>
        <input type="text" name="side1">
        <br>
        <label for="side2">Digite o segundo lado</label>
        <input type="text" name="side2">
        <br>
        <label for="side3">Digite o terceiro lado</label>
        <input type="text" name="side3">
        <br>

        <input type="submit">

    </form>

    <p><?php echo $result ?></p>
 </body>
 </html>