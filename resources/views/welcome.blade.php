<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghidul Bobocului</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800;900&display=swap" rel="stylesheet">
    
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div id="stars-container"></div>

    <header class="hero-header">
        <img src="/images/LogoBest - Copie.png" class="best-logo" alt="BEST Logo">
        <img src="/images/logosite3.png" class="logo-dreapta" alt="Logo Site 2">
    </header>

    <section class="hero">
        <h1 class="titlu-principal">GHIDUL BOBOCULUI</h1>

        <div class="hero-body">
            <nav class="meniu-lateral">
                <div class="item-planeta">
                    <a href="https://bestcj.ro/best-cluj-napoca/" target="_blank" class="buton-planeta">
                        <img src="/images/desen1.png" alt="Site-ul BEST">
                    </a>
                    <span class="text-planeta">Despre BEST</span>
                </div>

                <div class="item-planeta">
                    <a href="#despre-ghid" class="buton-planeta">
                        <img src="/images/desen6.png" alt="Despre Ghid">
                    </a>
                    <span class="text-planeta">Despre Ghid</span>
                </div>

                <div class="item-planeta">
                    <a href="#harta" class="buton-planeta">
                        <img src="/images/desen7.png" alt="Puncte de interes">
                    </a>
                    <span class="text-planeta">Puncte de interes</span>
                </div>

                <div class="item-planeta">
                    <div class="buton-planeta" onclick="deschideParteneri()">
                        <img src="/images/desen5.png" alt="Parteneri">
                    </div>
                    <span class="text-planeta">Parteneri</span>
                </div>
            </nav>

            <div class="carte-hero" onclick="deschideCartea()">
                <img src="images/copertaGhid.png" alt="Carte Ghid" class="imagine-carte">
                <span class="text-carte-digitala">CARTE DIGITALĂ</span>
            </div>
        </div>
    </section>

    <div id="modal-carte">
        <div class="modal-content">
            <button class="inchide-modal" onclick="inchideCartea()">&times;</button>
            <iframe src="https://online.fliphtml5.com/GhidulBoboculuiBest/CarteDigitala/" class="modal-iframe" allowfullscreen="true" scrolling="no"></iframe>
        </div>
    </div>

    <div id="modal-parteneri">
        <div class="modal-parteneri-content">
            <button class="inchide-modal" onclick="inchideParteneri()">&times;</button>
            <h2>Partenerii Noștri</h2>
            <div class="grid-parteneri">
                <div class="card-partener">
                    <img src="/images/TheDungeon.png" alt="The Dungeon">
                    <div class="butoane-partener">
                        <a href="https://thedungeon.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/Parapark.png" alt="Parapark">
                    <div class="butoane-partener">
                        <a href="https://paraparkcluj.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/VMax.png" alt="VMax">
                    <div class="butoane-partener">
                        <a href="https://vmaxcluj.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/BMW.png" alt="BMW">
                    <div class="butoane-partener">
                        <a href="https://www.bmw.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/WarZone.png" alt="WarZone">
                    <div class="butoane-partener">
                        <a href="https://war-zone.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/SquashClub.png" alt="Squash Club">
                    <div class="butoane-partener">
                        <a href="https://squashcluj.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/automatify.jpg" alt="Automatify">
                    <div class="butoane-partener">
                        <a href="https://automatify.ch" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/BRD102.png" alt="BRD">
                    <div class="butoane-partener">
                        <a href="https://www.brd.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/cloudflight.png" alt="Cloudflight">
                    <div class="butoane-partener">
                        <a href="https://www.cloudflight.io/en/" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/SeeUs.png" alt="SeeUs">
                    <div class="butoane-partener">
                        <a href="https://seeusworkandtravel.com" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/LaserHunt.png" alt="LaserHunt">
                    <div class="butoane-partener">
                        <a href="https://laserhunt.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>

                <div class="card-partener">
                    <img src="/images/Wonderland.png" alt="Wonderland">
                    <div class="butoane-partener">
                        <a href="https://wonderland.ro" target="_blank" class="btn-partener">Despre</a>
                        <a href="#harta" onclick="inchideParteneri()" class="btn-pin">
                            <img src="/images/pin.png" alt="Locație" class="iconita-pin">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="despre-ghid" class="sectiune-despre">
        <div class="text-despre">
            <h2>Despre acest ghid:</h2>
            <p>Bun venit în noua ta aventură studențească la UTCN! Am conceput acest ghid pentru a te ajuta să prinzi rapid ritmul vieții academice, oferindu-ți informații esențiale despre orare, sesiuni și viața de zi cu zi din campusurile Observator și Mărăști. Dincolo de cursuri, vei descoperi aici cele mai faine activități pentru timpul liber din oraș și oportunitățile prin care te poți dezvolta alături de noi, echipa BEST Cluj-Napoca. Relaxează-te și primește cu brațele deschise această experiență, pentru că anii de facultate vor fi cu siguranță cei mai memorabili! </p>
        </div>
    </section>

    <section class="sectiune-quiz">
        <div class="game-container">
            <h2>🚀Alien Match</h2>
            <p>Găsește perechile!</p>
            <div class="game-grid" id="gameGrid"></div>
        </div>
    </section>

    <section id="harta" class="sectiune-harta">
        <div class="titlu-harta-container">
            <h2 class="titlu-harta">Puncte de interes</h2>
            <p class="descriere-harta">Explorează harta de mai jos pentru a descoperi locațiile cheie din campusuri, facultăți, cantine și locurile preferate de distracție din Cluj-Napoca!</p>
        </div>
        <div class="harta-container" id="container-harta">
            <button class="btn-inapoi-harta" onclick="reseteazaHarta()" title="Înapoi / Resetează Harta">
                <img src="/images/button.png" alt="Înapoi">
            </button>
            <iframe id="iframe-harta" src="https://www.google.com/maps/d/embed?mid=1W4H-2uHYa3nC74aZLqtnxwBvTp3w_qc&ehbc=2E312F" class="harta-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="footer-site">
        <a href="https://www.instagram.com/best_clujnapoca/" target="_blank" class="footer-link">
            <img src="/images/instagram.png" alt="Instagram" class="iconita-social">
            <span>Instagram BEST</span>
        </a>
        <a href="https://www.facebook.com/BESTcluj" target="_blank" class="footer-link">
            <img src="/images/facebook.png" alt="Facebook" class="iconita-social">
            <span>Facebook BEST</span>
        </a>
        <a href="https://bestcj.ro" target="_blank" class="footer-link">
            <img src="/images/best.png" alt="BEST" class="iconita-social">
            <span>BEST Cluj-Napoca</span>
        </a>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>