// Data de início do relacionamento (formato: ano, mês-1, dia)
const DATA_INICIO_RELACIONAMENTO = new Date(2022, 0, 1); // 1 de janeiro de 2022

// Variáveis globais
let relationshipStartDate = DATA_INICIO_RELACIONAMENTO;

// Função para mostrar uma página específica
function showPage(pageNumber) {
    document.querySelectorAll('.page').forEach(page => {
        page.classList.remove('active');
    });
    document.getElementById('page' + pageNumber).classList.add('active');
    
    // Se for a página do coração, recarregar o iframe para garantir que a animação comece
    if (pageNumber === 8) {
        const heartFrame = document.getElementById('python-heart');
        heartFrame.src = heartFrame.src;
    }
}

// Função para carregar configurações do localStorage (fallback)
function loadSettingsFromLocalStorage() {
    // Carregar URL do Spotify
    const spotifyUrl = localStorage.getItem('love_spotify_url');
    if (spotifyUrl) {
        document.getElementById('spotify-iframe').src = spotifyUrl;
    }
    
    // Carregar data de início do relacionamento
    const dateInput = localStorage.getItem('love_relationship_date');
    if (dateInput) {
        relationshipStartDate = new Date(dateInput);
    }
    
    // Carregar texto da declaração
    const declarationText = localStorage.getItem('love_declaration');
    if (declarationText) {
        document.getElementById('declaration').textContent = declarationText;
    }
    
    // Carregar imagens
    loadImagesFromLocalStorage();
}

// Função para carregar imagens do localStorage
function loadImagesFromLocalStorage() {
    const imageIds = ['character-photo1', 'couple-photo', 'character-photo2'];
    
    imageIds.forEach(id => {
        const savedImage = localStorage.getItem('love_' + id);
        if (savedImage) {
            document.getElementById(id).src = savedImage;
            
            // Também atualizar as pré-visualizações nas configurações
            const previewId = id === 'character-photo1' ? 'preview1' : 
                             id === 'couple-photo' ? 'preview2' : 'preview3';
            if (document.getElementById(previewId)) {
                document.getElementById(previewId).src = savedImage;
            }
        }
    });
}

// Criar estrelas de fundo
function createStars() {
    const starsContainer = document.getElementById('stars');
    const numberOfStars = 200;

    for (let i = 0; i < numberOfStars; i++) {
        const star = document.createElement('div');
        star.classList.add('star');

        // Tamanho aleatório para as estrelas
        const size = Math.random() * 3;
        star.style.width = size + 'px';
        star.style.height = size + 'px';

        // Posição aleatória
        star.style.left = Math.random() * 100 + '%';
        star.style.top = Math.random() * 100 + '%';

        // Brilho aleatório
        star.style.opacity = Math.random() * 0.8 + 0.2;

        starsContainer.appendChild(star);
    }
}

// Criar meteoros
function createMeteors() {
    setInterval(() => {
        const meteor = document.createElement('div');
        meteor.classList.add('meteor');

        // Posição inicial aleatória
        const startX = Math.random() * window.innerWidth + window.innerWidth/2;
        const startY = Math.random() * window.innerHeight/2;
        meteor.style.left = startX + 'px';
        meteor.style.top = startY + 'px';

        // Tamanho aleatório
        const size = Math.random() * 150 + 50;
        meteor.style.width = size + 'px';

        // Duração aleatória
        const duration = Math.random() * 2 + 1;
        meteor.style.animationDuration = duration + 's';

        document.body.appendChild(meteor);

        // Remover o meteoro após a animação
        setTimeout(() => {
            meteor.remove();
        }, duration * 1000);
    }, 1000);
}

// Calcular tempo de namoro
function calculateRelationshipTime() {
    function updateTimer() {
        const now = new Date();
        const diff = now - relationshipStartDate;

        // Cálculo básico de todas as unidades
        const seconds = Math.floor(diff / 1000);
        const minutes = Math.floor(seconds / 60);
        const hours = Math.floor(minutes / 60);
        const days = Math.floor(hours / 24);
        const months = Math.floor(days / 30.44); // Média de dias por mês
        const years = Math.floor(days / 365.25); // Considerando anos bissextos

        // Cálculo correto dos valores restantes
        const remainingMonths = Math.floor(months % 12);
        const totalDaysInMonths = years * 365.25 + remainingMonths * 30.44;
        const remainingDays = Math.floor(days - totalDaysInMonths);
        const remainingWeeks = Math.floor(remainingDays / 7);
        const remainingDaysAfterWeeks = remainingDays % 7;
        const remainingHours = hours % 24;
        const remainingMinutes = minutes % 60;
        const remainingSeconds = seconds % 60;

        document.getElementById('years').textContent = years + (years === 1 ? ' ano' : ' anos');
        document.getElementById('months').textContent = remainingMonths + (remainingMonths === 1 ? ' mês' : ' meses');
        document.getElementById('weeks').textContent = remainingWeeks + (remainingWeeks === 1 ? ' semana' : ' semanas');
        document.getElementById('days').textContent = remainingDaysAfterWeeks + (remainingDaysAfterWeeks === 1 ? ' dia' : ' dias');
        document.getElementById('hours').textContent = remainingHours + (remainingHours === 1 ? ' hora' : ' horas');
        document.getElementById('minutes').textContent = remainingMinutes + ' min';
        document.getElementById('seconds').textContent = remainingSeconds + (remainingSeconds === 1 ? ' segundo' : ' segundos');
    }

    // Atualizar a cada segundo
    setInterval(updateTimer, 1000);
    updateTimer(); // Iniciar imediatamente
}

// Inicializar tudo quando a página carregar
window.onload = function() {
    createStars();
    createMeteors();
    calculateRelationshipTime();
};