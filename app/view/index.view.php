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
      <div class="catalog-page">
    <div class="catalog-container" >
      <div class="catalog-list">
        <div class="catalog-item">
          <img src="img/axelmockup.png" alt="Bière 1" class="item-image">
          <h3>La Blonde</h3>
          <p>Une bière blonde où la douceur juteuse de la pêche rencontre les nuances florales de l'hibiscus.</p>
          <button class="like-button">
            <i class="far fa-heart"></i>
          </button>
        </div>
        <div class="catalog-item">
          <img src="img/gracemockup.png" alt="Bière 2" class="item-image">
          <h3>Gracieuse</h3>
          <p>Délicatement parfumée à la fleur de cerisier, une bière florale et revigorante.</p>
          <button class="like-button">
            <i class="far fa-heart"></i>
          </button>
        </div>
        <div class="catalog-item">
          <img src="img/nourmockup.png" alt="Bière 3" class="item-image">
          <h3>Vertueuse</h3>
          <p>Une bière à la myrtille et à la violette, fruitée, florale et envoûtante.</p>
          <button class="like-button">
            <i class="far fa-heart"></i>
          </button>
        </div>
        <div class="catalog-item">
          <img src="img/romainmockup.png" alt="Bière 4" class="item-image">
          <h3>Douceur Inégalée</h3>
          <p>Un mariage subtil entre les arômes vibrants du jasmin et la douceur naturelle du miel.</p>
          <button class="like-button">
            <i class="far fa-heart"></i>
          </button>
        </div>
        <div class="catalog-item">
          <img src="img/coraliemockup.png" alt="Bière 5" class="item-image">
          <h3>La Brune</h3>
          <p>Une délicate harmonie de saveurs légères et rafraîchissantes. </p>
          <button class="like-button">
            <i class="far fa-heart"></i>
          </button>
        </div>
        <div class="catalog-item">
          <img src="img/luciemockup.png" alt="Bière 6" class="item-image">
          <h3>La Blache</h3>
          <p>Une bière blanche rafraîchissante, offrant une expérience légère et pétillante.</p>
          <button class="like-button">
            <i class="far fa-heart"></i>
          </button>
        </div>
        <div class="catalog-item">
          <img src="img/nawalmockup.png" alt="Bière 7" class="item-image">
          <h3>Tropicale</h3>
          <p>Une fusion entre l'arôme floral envoûtant de la rose avec la douceur exotique du litchi.</p>
          <button class="like-button">
            <i class="far fa-heart"></i>
          </button>
        </div>
      </div>
      <div class="fleche fleche-gauche">←</div>
      <div class="fleche fleche-droite">→</div>
    </div>
    <button class="commander-button">Commander</button>
  </div>
  <div class="informations">
    <img src="img/IMG_3567.PNG" alt="artisants" class = imageinfo>
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