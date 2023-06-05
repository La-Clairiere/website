<div class="page-content">
    <h1><?= $biere['nom'] ?></h1>
    <section class="biere-section">
        <div class="biere-block fullview-block" style="--beer_bgcolor:<?= $biere['couleur_hexa'] ?>; --beer_color:<?= $biere['couleur_texte'] ?>" data-beertype="<?= $biere['type'] ?>">
            <img src="public/images/bieres/bouteille_<?= $biere['ref_biere'] ?>.png" alt="<?= $biere['nom'] ?>">
            <div class="biere-buy">
                <div class="biere-order">
                    <?php if($biere['etat_stock'] > 0):?>
                        <a href="commande.php">Commander</a>
                    <?php else:?>
                        <span>Rupture de stock</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="biere-infos">
            <h2>Bière <?= $biere['type'] ?><?=(stripos($biere['ingredients_titre'], $biere['type'])) ? '' : ' '.$biere['ingredients_titre']?></h2>
            <p class="biere-desc"><?= $biere['description'] ?></p>
            <h3>Ingrédients</h3>
            <p class="biere-ingredients"><?= $biere['ingredients'] ?></p>
            <h3>Commander</h3>
            <div class="biere-prix"><?= $biere['prix'] ?> &euro;</div>
            <div class="biere-stock">Stock : <?= ($biere['etat_stock'] > 0) ? $biere['etat_stock'] : 'Rupture de stock' ?></div>
            <?php if($biere['etat_stock'] > 0):?>
                <div style="text-align: center; clear:both"><a class="btn" href="commande.php">Commander</a></div>
            <?php endif; ?>
        </div>
    </section>
</div>