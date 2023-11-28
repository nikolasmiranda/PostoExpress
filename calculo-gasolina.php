<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main>
    <div class="painel">
        <h2>Os combustíveis disponíveis em nosso posto são: </h2>
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
</body>
</html>