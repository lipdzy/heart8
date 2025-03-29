<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="imagens/favicon/favicon.png" type="image/x-icon">
    <title>Declaração de Amor</title>

    <script src="js/index.js" defer></script>
</head>
<body>
    <!-- Estrelas de fundo -->
    <div class="stars" id="stars"></div>

    <!-- Página 1 -->
    <div class="page active" id="page1">
        <h1>Mais um ano de namoro juntos! ❤</h1>
        <button class="btn" onclick="showPage(2)">Clique aqui para continuar</button>
    </div>

    <!-- Página 2 -->
    <div class="page" id="page2">
        <div class="photo-container">
            <!-- FOTO 1: Substituir o src pela URL da sua imagem -->
            <img src="C:\Users\USER\OneDrive\Imagens\hello5.jpg" alt="Personagem">
        </div>
        <h2>Você gostaria de ouvir nossa música?</h2>
        <div class="options">
            <button class="btn" onclick="showPage(3)">Yes ❤</button>
            <button class="btn" onclick="showPage(3)">no 😡</button>
        </div>
    </div>

    <!-- Página 3 -->
    <div class="page" id="page3">
        <h2>Te dedico cada verso dessa linda canção</h2>
        <div class="spotify-embed">
            <!-- MÚSICA: Substituir o ID da música após /track/ -->
            <iframe src="https://open.spotify.com/embed/track/4vgU9MGJwhgBEtlO8mMN49?utm_source=generator" width="100%" height="100%" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <button class="btn" onclick="showPage(4)">Clique aqui para continuar</button>
    </div>

    <!-- Página 4 -->
    <div class="page" id="page4">
        <div class="photo-container">
            <!-- FOTO 2: Substitua o src pela URL da foto do casal -->
            <img src="C:\Users\USER\OneDrive\Imagens\casalpint.jpg" alt="Foto do casal">
        </div>
        <!-- DECLARAÇÃO: Editar o texto abaixo para sua declaração -->
        <p>
            Cada momento ao seu lado é especial. Você ilumina meus dias e faz meu coração bater mais forte. Obrigado(a) por compartilhar sua vida comigo e por me fazer tão feliz. Te amo infinitamente!
        </p>
        <button class="btn" onclick="showPage(5)">Clique para continuar</button>
    </div>

    <!-- Página 5 -->
    <div class="page" id="page5">
        <div class="photo-container">
            <!-- FOTO 3: Substituir o src pela URL da sua terceira imagem -->
            <img src="C:\Users\USER\OneDrive\Imagens\hhspotify.jpg" alt="Personagem">
        </div>
        <h2>Você gostaria de ver a quanto tempo estamos juntos?</h2>
        <div class="options">
            <button class="btn" onclick="showPage(6)">yes 🥰</button>
            <button class="btn" onclick="showPage(6)">no 🥺</button>
        </div>
    </div>

    <!-- Página 6 -->
    <div class="page" id="page6">
        <h2>Estamos juntos há:</h2>
        <div class="timer">
            <div id="years">0 anos</div>
            <div id="months">0 meses</div>
            <div id="weeks">0 semanas</div>
            <div id="days">0 dias</div>
            <div id="hours">0 horas</div>
            <div id="minutes">0 minutos</div>
            <div id="seconds">0 segundos</div>
        </div>
        <button class="btn" onclick="showPage(7)">Clique aqui para continuar</button>
    </div>

    <!-- Página 7 -->
    <div class="page" id="page7">
        <h2>veja declaração especial:</h2>
    
        <button class="btn" onclick="showPage(8)">Clique para ver coração</button>
    </div>

    <!-- Página 8 (Nova página com o coração Python) -->
    <div class="page" id="page8">
        <h2>Meu amor por você cresce a cada dia, assim como esse coração</h2>
        <div class="heart-animation-container" style="box-shadow: none;">
            <iframe id="python-heart" src="heart2.html" width="100%" height="100%" frameborder="0" style="box-shadow: none;"></iframe>
        </div>
        <button class="btn" onclick="showPage(1)">Voltar ao início</button>
    </div>
    
</body>
</html>