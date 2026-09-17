function deschideCartea() {
    document.getElementById('modal-carte').style.display = 'flex';
}

function inchideCartea() {
    document.getElementById('modal-carte').style.display = 'none';
}

function deschideParteneri() {
    document.getElementById('modal-parteneri').style.display = 'flex';
}

function inchideParteneri() {
    document.getElementById('modal-parteneri').style.display = 'none';
}

function reseteazaHarta() {
    const iframe = document.getElementById('iframe-harta');
    iframe.src = iframe.src; 
}

function createStars() {
    const container = document.getElementById('stars-container');
    const numStars = 80;
    
    for (let i = 0; i < numStars; i++) {
        let star = document.createElement("div");
        star.className = "star";
        let size = Math.random() * 3 + 1;
        star.style.width = size + "px";
        star.style.height = size + "px";
        star.style.left = Math.random() * 100 + "vw";
        star.style.top = Math.random() * 100 + "vh";
        star.style.animationDuration = (Math.random() * 6 + 5) + "s";
        star.style.animationDelay = Math.random() * 5 + "s";
        container.appendChild(star);
    }
}
createStars();

// ----- FUNKY ALIEN MATCH GAME SCRIPT -----
const items = [
    '/images/meteorit.png', 
    '/images/asteroid.png', 
    '/images/rocket.png', 
    '/images/astronaut.png', 
    '/images/telescop.png', 
    '/images/planet.png'
];

let cards = [...items, ...items];
let flippedCards = [];
let matchedPairs = 0;
let lockBoard = false;

function initGame() {
    const grid = document.getElementById('gameGrid');
    grid.innerHTML = '';
    cards.sort(() => Math.random() - 0.5);
    flippedCards = [];
    matchedPairs = 0;
    lockBoard = false;

    cards.forEach((item, index) => {
        const card = document.createElement('div');
        card.classList.add('game-card');
        card.dataset.value = item;
        
        // Creăm elementul imagine și îl adăugăm în card
        const img = document.createElement('img');
        img.src = item;
        img.alt = "carte joc";
        card.appendChild(img);

        card.addEventListener('click', flipCard);
        grid.appendChild(card);
    });
}

function flipCard() {
    if (lockBoard) return;
    if (this.classList.contains('flipped') || this.classList.contains('matched')) return;

    this.classList.add('flipped');
    flippedCards.push(this);

    if (flippedCards.length === 2) {
        checkForMatch();
    }
}

function checkForMatch() {
    const [card1, card2] = flippedCards;
    const isMatch = card1.dataset.value === card2.dataset.value;

    if (isMatch) {
        card1.classList.add('matched');
        card2.classList.add('matched');
        matchedPairs++;
        resetTurn();

        if (matchedPairs === items.length) {
            setTimeout(() => {
                alert('🎉 Felicitări, bobocule! Ai aterizat cu succes în universul universitar!');
                initGame(); // Resetează jocul
            }, 500);
        }
    } else {
        lockBoard = true;
        setTimeout(() => {
            card1.classList.remove('flipped');
            card2.classList.remove('flipped');
            resetTurn();
        }, 1000);
    }
}

function resetTurn() {
    flippedCards = [];
    lockBoard = false;
}

// Inițializează jocul după încărcarea paginii
document.addEventListener('DOMContentLoaded', initGame);