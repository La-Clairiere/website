<div class="page-content">
    <h1><?=$biere['nom']?></h1>
    <p><?=$biere['type']?></p>
    <p><?=$biere['prix']?></p>
    <P><?=$biere['etat_stock']?></P>
    <p><?=$biere['ingredients_titre']?></p>
    <p><?=$biere['ingredients']?></p>
    <p><?=$biere['description']?></p>
    <img src="public/images/bieres/bouteille_<?= $biere['ref_biere']?>.png"alt="<?=$biere['nom']?>">
   
    
</div>