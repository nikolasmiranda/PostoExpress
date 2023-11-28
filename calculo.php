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
    <title>Posto Express</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <section id=navegacao>
    <nav>
        <ul id="ulnav">
            <li class="navli"><a class="ancoragemnav" href="index.php">Início</a></li>
            <li class="navli"><a class="ancoragemnav" href="calculo-gasolina.php">Calculo de Gasolina</a></li>
            <li class="navli"><a class="ancoragemnav" href="unidades.html">Unidades</a></li>
            <li class="navli"><a class="ancoragemnav" href="sobre.html">Sobre</a></li>
            <li class="navli"><a class="ancoragemnav" href="formulario_contato.html">Contato</a></li>
        </ul>
    </nav>
    </section>
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
    <br>
    <section id="footers">
        <section class="rodapes1">
        <footer>
            <h1>Páginas</h1>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="calculo-gasolina.php">Cálculo de Gasolina</a></li>
                <li><a href="unidades.html">Unidades</a></li>
                <li><a href="unidades.html">sobre</a></li>
                <li><a href="formulario-contato.html">Contato</a></li>
            </ul>
        </footer>
        </section>
        <section class="rodapes2">
            <footer>
                <h1>Redes Sociais</h1>
                <ul>
                    <li><a href="instagram.com">Instagram</a></li>
                    <li><a href="twitter.com">X(Twitter)</a></li>
                    <li><a href="twitter.com">Youtube</a></li>
                    <li><a href="web.whatsapp.com">Whatsapp</a></li>
                </ul>
            </footer>
        </section>
        <section class="rodapes1">
        <footer>
            <h1>Delivery</h1>
            <ul>
                <li><a href="web.whatsapp.com">Whatsapp</a></li>
                <li><a href="ifood.com.br">Ifood</a></li>
                <li><a href="rappi.com.br">Rappi</a></li>
                <li><a href="uber.com">Uber Eats</a></li>
            </ul>
        </footer>
        </section>
        <section class="rodapes2"> 
            <h1>Membros da Equipe</h1>
            <ul>
                <li><a href="https://github.com/nikolasmiranda">Nikolas Gonçalves Miranda</a></li>
                <li><a href="Luccagm1">Lucca Gonçalves Miranda</a></li>
            </ul>
        </section>
    </section>
</body>
</html>