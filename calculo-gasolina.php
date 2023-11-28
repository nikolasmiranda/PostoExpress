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
    <main>
    <div class="painel">
        <h2 id="h2-painel">Os combustíveis disponíveis em nosso posto são: </h2>
        <div class="conteudo-painel">
            <p>O posto Express destaca-se pela qualidade excepcional de seus combustíveis, mantendo padrões rigorosos. 
                Apesar das variações nos preços devido a fatores externos, o posto é transparente ao fornecer informações atualizadas. 
                Ao abastecer no Express, os clientes desfrutam da confiabilidade dos produtos 
                e da possibilidade de escolha informada diante das flutuações de preços.
        <ul>
            <li class="li-combustiveis"><b>Álcool = R$4,80<b></li>
            <li class="li-combustiveis"><b>Díesel = R$5,50<b></li>
            <li class="li-combustiveis"><b>Gasolina = R$5,00<b></li>
        </ul>  
        </div>

    <div class="painel">
        <h2>Cálcular o valor (R$) do consumo</h2>
        <div class="conteudo-painel">
            <form action="calculo.php" method="POST">
            <label for="distancia">Distância em Kilômetros a ser percorrida</label>
            <input type="number" class="campoTexto" name="distancia" required >
            <label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
            <input type="number" class="campoTexto" name="autonomia" required >
            <button class="botao" type="submit">Calcular</button>
            </form>
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