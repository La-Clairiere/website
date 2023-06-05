<style>
    main {
        margin: 0;
        width: 100%;
        max-width: unset;
    }

    .page-content {
        margin: auto;
        width: 90%;
        max-width: 1600px;
    }
</style>
<link rel="stylesheet" href="acceuil.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<div class="banner">
    <img class="logo" src="public/images/logos/la_clairiere_48b.svg">
</div>
<section class="citation-section">
    <div class="citation-container">
        <div class="citation-banner">
            <h2>La Clairière, l'essence même</h2>
        </div>
    </div>
</section>
<div class="page-content" id="accueil">
    <div class="nosproduits">
        <h2>Nos produits</h2>
    </div>
    <div class="catalog-page">
        <div class="catalog-container">
            <div class="catalog-list">
                <?php foreach ($catalogue as $biere) : ?>
                    <div class="catalog-item" style="--beer_bgcolor:<?= $biere['couleur_hexa'] ?>; --beer_color:<?= $biere['couleur_texte'] ?>">
                        <img src="public/images/bieres/bouteille_<?= $biere['ref_biere'] ?>.png" alt="<?= $biere['nom'] ?>" class="item-image">
                        <h3><?= $biere['nom'] ?></h3>
                        <p><?= $biere['description'] ?></p>
                        <button class="like-button">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="fleche fleche-gauche">←</div>
            <div class="fleche fleche-droite">→</div>
        </div>
    </div>
    <div style="text-align: center;">
        <a href="commande.php"><button class="commander-button">Commander</button></a>
        <a href="catalogue.php"><button class="commander-button">Voir tout le catalogue</button></a>
    </div>
    <div class="produits">
        <h2>Nos produits en vidéo</h2>
        <div id="video_container"><video id="spot_video" controls src="public/images/spot_video.mp4"></video></div>
    </div>
    <div class="informations">
        <img src="public/images/accueil/IMG_3567.PNG" alt="artisants" class="imageinfo">
        <h2>Découvez La Clairière</h2>
        <p>Une brasserie qui propose des bières authentiques et naturelles par excellence. Savourez des arômes uniques avec une délicieuse harmonie entre tradition et innovation. Plongez dans l'essence de la bière et le charme de la nature avec La Clairière.</p>
        <div style="text-align: center;">
            <a href="notrehistoire.php"><button class="commander-button">Découvrez notre équipe</button></a>
        </div>
        <div style="clear:both"></div>
    </div>

    <script>
        // JS du scroll du mini catalogue de biere
        const catalogList = document.querySelector('.catalog-list');
        const catalogItems = document.querySelectorAll('.catalog-item');
        const arrowRight = document.querySelector('.fleche-droite');
        const arrowLeft = document.querySelector('.fleche-gauche');
        let currentIndex = 0;

        arrowRight.addEventListener('click', () => {
            if (currentIndex < catalogItems.length - 1) {
                currentIndex++;
                scrollCatalog();
            }
        });

        arrowLeft.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                scrollCatalog();
            }
        });

        function scrollCatalog() {
            const itemWidth = catalogItems[0].offsetWidth;
            const offset = -currentIndex * itemWidth;
            catalogList.style.transform = `translateX(${offset}px)`;
        }
    </script>
    <script>
        // JS du bouton like copier (ce n'est pas mon code)
        const likeButtons = document.querySelectorAll('.like-button');

        likeButtons.forEach(button => {
            button.addEventListener('click', () => {
                button.classList.toggle('liked');
                if (button.classList.contains('liked')) {
                    button.innerHTML = '<i class="fas fa-heart"></i>';
                } else {
                    button.innerHTML = '<i class="far fa-heart"></i>';
                }
            });
        });
    </script>
    <script>
        // JS du Logo fondu
        const banner = document.querySelector('.logo');
        let prevScrollPos = window.pageYOffset;

        window.addEventListener('scroll', () => {
            const currentScrollPos = window.pageYOffset;

            if (currentScrollPos > prevScrollPos) {
                banner.classList.add('fade-out');
            } else {
                banner.classList.remove('fade-out');
            }

            prevScrollPos = currentScrollPos;
        });
    </script>
</div>