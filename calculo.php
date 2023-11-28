<?php 

$mensagem = "";

if ($_POST) {
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
    
    if(is_numeric($distancia) && is_numeric($autonomia)) {
        $valorDiesel = 5.50;
        $valorGasolina = 5.00;
        $valorAlcool = 4.80;

        $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
        $calculoGasolina = number_format($calculoGasolina, 2, ', ', '.');
        $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
        $calculoAlcool = number_format($calculoAlcool, 2, ', ', '.');
        $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
        $calculoDiesel = number_format($calculoDiesel, 2, ', ', '.');

        $mensagem.= "<p>O valor do consumo em R$ para Gasolina foi de: R$ ".$calculoGasolina."</p>";
        $mensagem.= "<p>O valor do consumo em R$ para Alcool foi de: R$ ".$calculoAlcool."</p>";
        $mensagem.= "<p>O valor do consumo em R$ para Diesel foi de: R$ ".$calculoDiesel."</p>";    
    } else {
        echo "<p> O valor recebido não é númerico.</p>";
    }

} else {
    echo "<p>Nenhum dado foi recebido pelo formúlario.</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Consumo de Combustivel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do calculo 
            <div class="conteudo-painel">
            <?php
            echo $mensagem;
            ?>
            <a class="botao" href="calculo-gasolina.php">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>