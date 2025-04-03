<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaração de Amor</title>
    <link rel="stylesheet" href="styles.css">
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
            <!-- FOTO 1: Substitua o src pela URL da sua imagem -->
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
        <!-- DECLARAÇÃO: Edite o texto abaixo para sua declaração -->
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
        <h2>Meu amor por você cresce a cada dia, assim como esse coração ❤</h2>
        <div class="heart-animation-container" style="box-shadow: none;">
            <iframe id="python-heart" src="heart3.html" width="100%" height="100%" frameborder="0" style="box-shadow: none;"></iframe>
        </div>
        <button class="btn" onclick="showPage(9)">Veja mais</button>
    </div>

    <!-- NOVA PÁGINA 9 - Introdução aos 10 motivos -->
    <div class="page" id="page9">
        <div class="glowing-text">Veja agora 10 motivos do por que eu amo você:</div>
        <button class="btn" onclick="showPage(10)" style="margin-top: 50px;">Continuar</button>
    </div>

    <!-- NOVA PÁGINA 10 - Motivos 1, 2 e 3 -->
    <div class="page" id="page10">
        <!-- Container para os corações flutuantes da página 10 -->
        <div class="hearts-container" id="hearts-container-10"></div>
        
        <div class="love-reason">
            <h3><span class="reason-number">1</span> Seu Sorriso</h3>
            <p>Seu sorriso ilumina qualquer ambiente e me faz esquecer todos os problemas. Quando você sorri, o mundo todo parece um lugar melhor. É como se o sol brilhasse só para mim.</p>
        </div>
        
        <div class="love-reason">
            <h3><span class="reason-number">2</span> Seus Olhos</h3>
            <p>Seus olhos são como um universo inteiro. Quando olho para eles, me perco completamente. Eles transmitem todo o amor que sinto de você e refletem a beleza da sua alma.</p>
        </div>
        
        <div class="love-reason">
            <h3><span class="reason-number">3</span> Seu Abraço</h3>
            <p>Seu abraço é o meu lugar preferido no mundo. É onde me sinto seguro(a), protegido(a) e amado(a). Parece que fomos feitos um para o outro, como peças de um quebra-cabeça.</p>
        </div>
        
        <div class="navigation-btns">
            <button class="btn" onclick="showPage(11)">Próximo</button>
        </div>
    </div>

    <!-- NOVA PÁGINA 11 - Motivos 4, 5, 6 e 7 -->
    <div class="page" id="page11">
        <!-- Container para os corações flutuantes da página 11 -->
        <div class="hearts-container" id="hearts-container-11"></div>
        
        <div class="love-reason">
            <h3><span class="reason-number">4</span> Seu Beijo</h3>
            <p>Seus beijos me transportam para outro mundo. Cada beijo é único e especial, mesmo depois de tanto tempo juntos. São doces, quentes e cheios de paixão.</p>
        </div>
        
        <div class="love-reason">
            <h3><span class="reason-number">5</span> Seu Carinho</h3>
            <p>A forma como você demonstra carinho nos pequenos gestos faz meu dia a dia muito mais feliz. Cada toque, cada palavra de afeto, cada momento de atenção me faz te amar ainda mais.</p>
        </div>
        
        <div class="love-reason">
            <h3><span class="reason-number">6</span> Sua Personalidade</h3>
            <p>Sua força, determinação, gentileza e humor me conquistam todos os dias. Você é autêntico(a) e isso me inspira.</p>
        </div>
        
        <div class="love-reason">
            <h3><span class="reason-number">7</span> Sua Atenção</h3>
            <p>Escuta atentamente e sempre está disponível quando preciso. Isso demonstra o quanto você se importa.</p>
        </div>
        
        <div class="navigation-btns">
            <button class="btn" onclick="showPage(10)">Anterior</button>
            <button class="btn" onclick="showPage(12)">Próximo</button>
        </div>
    </div>

    <!-- NOVA PÁGINA 12 - Motivos 8, 9 e 10 -->
    <div class="page" id="page12">
        <!-- Container para os corações flutuantes da página 12 -->
        <div class="hearts-container" id="hearts-container-12"></div>
        
        <div class="love-reason">
            <h3><span class="reason-number">8</span> Seu Cheiro</h3>
            <p>Seu cheiro é inconfundível e me traz uma sensação de paz e conforto. É como voltar para casa depois de um longo dia. Me acalma, me acolhe e me faz querer ficar perto de você para sempre.</p>
        </div>
        
        <div class="love-reason">
            <h3><span class="reason-number">9</span> Suas Gracinhas</h3>
            <p>Suas pequenas manias, seus jeitos peculiares e suas gracinhas são adoráveis. Esses detalhes te tornam único(a) e me fazem sorrir. São esses momentos que tornam nossa relação tão especial.</p>
        </div>
        
        <div class="love-reason">
            <h3><span class="reason-number">10</span> Sua Voz</h3>
            <p>Sua voz é como música para meus ouvidos. Seja falando comigo, cantando ou até mesmo rindo, o som da sua voz me traz alegria e faz meu coração bater mais forte. Poderia ouvir você o dia todo.</p>
        </div>
        
        <div class="navigation-btns">
            <button class="btn" onclick="showPage(11)">Anterior</button>
            <button class="btn" onclick="showPage(1)">Finalizar</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>