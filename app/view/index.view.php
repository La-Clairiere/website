<link rel="stylesheet" href="acceuil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<body>
      <div class="banner">
        <h1><span class="logo">La Clairière</span></h1>
      </div>
      <section class="citation-section">
        <div class="citation-container">
          <div class="citation-banner">
            <h2>"La bière, telle une cascade d'émotions, est un hymne à la nature, une symphonie de saveurs authentiques qui révèlent la beauté brute de l'art brassicole."
                                  - La Clairière</h2>
          </div>
        </div>
      </section>
      <div class="nosproduits">
        <h2><br><br>NOS PRODUITS</br></br></h2>
      </div>
      <?php foreach ($catalogue as $biere) : ?>
        <div class="catalog-item">
            <src="public/images/bieres/bouteille_<?=$biere['ref_biere']?>.png" alt="<?=$biere['nom']?>">
            <h3><?= $biere['nom'] ?></h3>
            <p><?= $biere['description'] ?></p>
            <button class="like-button">
                <i class="far fa-heart"></i>
            </button>
        </div>
    <?php endforeach; ?>
</div>
  <div class="container">
    <div class="image"></div>
    <div class="text">
      <h1>Découvrez La Clairière,</h1>
      <p> Une bière authentique et naturelle par excellence. Entre tradition et innovation plongez dans l'essence de la nature avec chaque gorgée. La Clairière – l’essence même.
</p>
    </div>
  </div>
  <div class="informations">
    <img src="images/IMG_3567.PNG" alt="artisants" class = imageinfo>
    <h3>Une histoire de bière..</h3>
    <p>Il était une fois une histoire de  </p>

    <script> // JS du scroll du mini catalogue de biere
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
    <script> // JS du bouton like copier (ce n'est pas mon code)
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
    <script> // JS du Logo fondu
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
  </script></script>
  </body>
  </html>