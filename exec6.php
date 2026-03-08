<!-- 
    Construir uma página PHP onde seja possível ler um número inteiro entre 1
    e 12 e escrever o mês correspondente. Caso o número seja fora desse
    intervalo, informar que não existe mês com este número.
-->

<?php 

    $nr = @$_GET["month"];
    $result = null;

            switch ($nr) {
                case 1:
                    $result = "Janeiro";
                    break;
                case 2:
                    $result = "Fevereiro";
                    break;
                case 3:
                    $result = "Março";
                    break;
                case 4:
                    $result = "Abril";
                    break;
                case 5:
                    $result = "Maio";
                    break;
                case 6:
                    $result = "Junho";
                    break;
                case 7:
                    $result = "Julho";
                    break;
                case 8:
                    $result = "Agost";
                    break;
                case 9:
                    $result = "Setembro";
                    break;
                case 10:
                    $result = "Outubro";
                    break;
                case 11:
                    $result = "Novembro";
                    break;
                case 12:
                    $result = "Dezembro";
                    break;
                default:
                    $result = "Nenhum mês com esse número";
                    break;
            }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite o Mês</title>
</head>
<body>
    <form method="get">

        <label for="month">Digite um mês</label>
        <input type="number" name="month">
        <br>

        <input type="submit">
    </form>

    <p><?php echo $result; ?></p>
</body>
</html>